<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Section;
use App\Models\ImageHover;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\AdvertisementSection;
use Illuminate\Support\Facades\Auth;
use App\Models\AdvertisementBoxBlock;
use App\Models\AdvertisementListBlock;
use App\Models\AdvertisementImageBlock;
use App\Models\AdvertisementVideoBlock;
use Illuminate\Support\Facades\Session;
use App\Models\AdvertisementFooterBlock;
use App\Models\AdvertisementHeaderBlock;
use App\Models\AdvertisementSubBoxBlock;
use App\Models\AdvertisementSubImageBlock;
use App\Models\AdvertisementAccordionBlock;
use App\Models\AdvertisementSubAccordionBlock;

class UserAdvertisementController extends Controller
{
    public function getAdvertisements(Request $request) {
        $limit = 10;
        $search = $request->input('search');

        $advertisementsQuery = Advertisement::where('user_id', Auth::user()->id);

        if ($search) {
            $advertisementsQuery->where(function($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('param_name', 'like', "%{$search}%");
            });
        }

        $advertisements = $advertisementsQuery->paginate($limit);
        $ttl = $advertisements->total();
        $ttlpage = ceil($ttl / $limit);
        
        return view('users.advertisements.advertisements', compact('advertisements', 'ttl', 'ttlpage'));
    }

    public function addAdvertisement() {
        return view('users.advertisements.add-advertisement');
    }

    public function storeAdvertisement(Request $request) {
        if (!empty($request->mainImage)) {
            $mainImageName = time() . '.' . $request->mainImage->extension();
            $request->mainImage->move(public_path('assets/images/all'), $mainImageName);
        } else {
            $mainImageName = '';
        }
        if (!empty($request->logoWhite)) {
            $logoWhiteName = time() . '.' . $request->logoWhite->extension();
            $request->logoWhite->move(public_path('assets/images/all'), $logoWhiteName);
        } else {
            $logoWhiteName = '';
        }
        if (!empty($request->logoColor)) {
            $logoColorName = time() . '.' . $request->logoColor->extension();
            $request->logoColor->move(public_path('assets/images/all'), $logoColorName);
        } else {
            $logoColorName = '';
        }
        Advertisement::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'main_image' => $mainImageName,
            'logo_white' => $logoWhiteName,
            'logo_color' => $logoColorName,
            'param_name' => $request->paramName,
            'menu_bar_status' => 1,
            'status' => 0
        ]);

        Session::flash('success', '広告が正常に追加されました');
        return redirect()->route('user.get.advertisements');
    }

    public function editAdvertisement($id) {
        $advertisement = Advertisement::find($id);
        return view('users.advertisements.edit-advertisement', compact('advertisement'));
    }

    public function updateAdvertisement(Request $request) {
        $updateData = [
            'name' => $request->name,
            'param_name' => $request->paramName
        ];

        if (!empty($request->mainImage)) {
            $mainImageName = time() . '.' . $request->mainImage->extension();
            $request->mainImage->move(public_path('assets/images/all'), $mainImageName);
            $updateData['main_image'] = $mainImageName;
        }

        if (!empty($request->logoWhite)) {
            $logoWhiteName = time() . '.' . $request->logoWhite->extension();
            $request->logoWhite->move(public_path('assets/images/all'), $logoWhiteName);
            $updateData['logo_white'] = $logoWhiteName;
        }

        if (!empty($request->logoColor)) {
            $logoColorName = time() . '.' . $request->logoColor->extension();
            $request->logoColor->move(public_path('assets/images/all'), $logoColorName);
            $updateData['logo_color'] = $logoColorName;
        }

        Advertisement::where('id', $request->id)->update($updateData);
        Session::flash('success', '広告が正常に更新されました');
        return redirect()->route('user.get.advertisements');
    }

    public function updateAdvertisementStatus(Request $request) {
        $advertisement = Advertisement::find($request->id);
        if ($advertisement) {
            $advertisement->status = $request->status;
            $advertisement->save();
            
            Session::flash('success', 'ページのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'ページステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    public function updateMenuBarStatus(Request $request) {
        $advertisement = Advertisement::find($request->id);
        if ($advertisement) {
            $advertisement->menu_bar_status = $request->status;
            $advertisement->save();
            
            Session::flash('success', '広告のメニューバーステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', '広告のメニューバーステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    public function deleteAdvertisement($id) {
        Advertisement::where('id', $id)->delete();
        Session::flash('success', 'ページが正常に削除されました');
        return redirect()->route('user.get.advertisements');
    }

    public function showSections($id) {
        $limit = 10;
        $advertisement = Advertisement::find($id);
        $sections = AdvertisementSection::where('advertisement_id', $id)->orderBy('order')->paginate($limit);
        $ttl = $sections->total();
        $ttlpage = ceil($ttl / $limit);
        return view('users.advertisements.show-sections', compact('advertisement','sections', 'ttl', 'ttlpage'));
    }

    public function addSection($id) {
        // Check if there are any advertisement sections of type 'contact'
        $hasContactSection = AdvertisementSection::where('advertisement_id', $id)
                            ->whereHas('section', function($query) {
                                $query->where('type', 'contact');
                            })
                            ->exists();

        // Based on the existence of contact sections, fetch the appropriate sections
        if ($hasContactSection) {
            $sections = Section::where('type', '!=', 'contact')->where('status', 1)->orderBy('order')->get();
        } else {
            $sections = Section::where('status', 1)->orderBy('order')->get();
        }

        return view('users.advertisements.add-section', compact('id', 'sections'));
    }

    public function storeSection(Request $request) {
        $advertisement = Advertisement::where('id', $request->id)->first();

        $maxOrder = AdvertisementSection::where('advertisement_id', $advertisement->id)->max('order');
        // If there are no sections yet, $maxOrder will be null, so we start with 1
        $order = $maxOrder ? $maxOrder + 1 : 1;

        AdvertisementSection::create([
            'advertisement_id' => $advertisement->id,
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'section_id' => $request->section,
            'order' => $order,
            'status' => 0
        ]);

        Session::flash('success', 'セクションが正常に追加されました');
        return redirect()->route('user.show.sections', $advertisement->id);
    }

    public function editSection($id) {
        $advertisementSection = AdvertisementSection::find($id);
        return view('users.advertisements.edit-section', compact('advertisementSection'));
    }

    public function updateSection(Request $request) {
        $updateData = [
            'name' => $request->name
        ];

        $advertisementSection = AdvertisementSection::find($request->id);
        $advertisementSection->update($updateData);

        Session::flash('success', 'セクションが正常に更新されました');
        return redirect()->route('user.show.sections', $advertisementSection->advertisement_id);
    }

    public function updateSectionStatus(Request $request) {
        $section = AdvertisementSection::find($request->id);
        if ($section->section->type == 'header') {
            $advertisementHeaderBlock = AdvertisementHeaderBlock::where('advertisement_section_id', $section->id)->get();
            if ($advertisementHeaderBlock->isEmpty()) {
                Session::flash('warning', 'セクションのステータスはまだ変更できません');
                return response()->json(['success' => true]);
            }
        }
        if ($section->section->type == 'footer') {
            $advertisementFooterBlock = AdvertisementFooterBlock::where('advertisement_section_id', $section->id)->get();
            if ($advertisementFooterBlock->isEmpty()) {
                Session::flash('warning', 'セクションのステータスはまだ変更できません');
                return response()->json(['success' => true]);
            }
        }
        if ($section->section->type == 'list') {
            $advertisementListBlock = AdvertisementListBlock::where('advertisement_section_id', $section->id)->get();
            if ($advertisementListBlock->isEmpty()) {
                Session::flash('warning', 'セクションのステータスはまだ変更できません');
                return response()->json(['success' => true]);
            }
        }
        if ($section->section->type == 'box') {
            $advertisementBoxBlock = AdvertisementBoxBlock::where('advertisement_section_id', $section->id)->get();
            if ($advertisementBoxBlock->isEmpty()) {
                Session::flash('warning', 'セクションのステータスはまだ変更できません');
                return response()->json(['success' => true]);
            }
        }
        if ($section) {
            $section->status = $request->status;
            $section->save();
            $advertisementSections = AdvertisementSection::where('advertisement_id', $section->advertisement_id)->get();
            $allInactive = true;
            
            foreach ($advertisementSections as $advertisementSection) {
                if ($advertisementSection->status == 1) {
                    $allInactive = false;
                    break;
                }
            }

            $advertisement = Advertisement::find($section->advertisement_id);
            if ($allInactive) {
                $advertisement->status = 0;
                $advertisement->save();
            } else {
                $advertisement->status = 1;
                $advertisement->save();
            }
            Session::flash('success', 'セクションのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'セクションステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    public function orderUpSection($id)
    {
        $currentSection = AdvertisementSection::findOrFail($id);
        $previousSection = AdvertisementSection::where('order', '<', $currentSection->order)
                                            ->orderBy('order', 'desc')
                                            ->first();

        if ($previousSection) {
            // Swap the order values
            $tempOrder = $currentSection->order;
            $currentSection->order = $previousSection->order;
            $previousSection->order = $tempOrder;

            $currentSection->save();
            $previousSection->save();

            Session::flash('success', 'セクションの順番が正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'セクションの順番が正常に変更に失敗しました');
        return response()->json(['success' => true]);
    }

    public function orderDownSection($id)
    {
        $currentSection = AdvertisementSection::findOrFail($id);
        $nextSection = AdvertisementSection::where('order', '>', $currentSection->order)
                                        ->orderBy('order')
                                        ->first();

        if ($nextSection) {
            // Swap the order values
            $tempOrder = $currentSection->order;
            $currentSection->order = $nextSection->order;
            $nextSection->order = $tempOrder;

            $currentSection->save();
            $nextSection->save();
            Session::flash('success', 'セクションの順番が正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'セクションの順番が正常に変更に失敗しました');
        return response()->json(['success' => true]);
    }

    public function deleteSection($id) {
        $advertisementSection = AdvertisementSection::find($id);
        if ($advertisementSection) {
            $advertisementSection->delete();
            if ($advertisementSection->section->type == 'header') {
                AdvertisementHeaderBlock::where('advertisement_section_id', $advertisementSection->id)->delete();
            }
            if ($advertisementSection->section->type == 'footer') {
                AdvertisementFooterBlock::where('advertisement_section_id', $advertisementSection->id)->delete();
            }
            Session::flash('success', 'セクションが正常に削除されました');
            return redirect()->route('user.show.sections', $advertisementSection->advertisement_id);
        }
    }

    public function previewSection($id) {
        $section = Section::where('id', $id)->first();
        return view('sections.' . $section->name);
    }

    public function showSectionBlocks($id) {
        $advertisementSection = AdvertisementSection::find($id);
        $type = $advertisementSection->section->type;
        if($type == 'header') {
            $advertisementSectionBlocks = AdvertisementHeaderBlock::where('advertisement_section_id', $advertisementSection->id)->get();
        }
        if($type == 'footer') {
            $advertisementSectionBlocks = AdvertisementFooterBlock::where('advertisement_section_id', $advertisementSection->id)->get();
        }
        if($type == 'list') {
            $advertisementSectionBlocks = AdvertisementListBlock::where('advertisement_section_id', $advertisementSection->id)->get();
        }
        if($type == 'box') {
            $advertisementSectionBlocks = AdvertisementBoxBlock::where('advertisement_section_id', $advertisementSection->id)->get();
        }
        if($type == 'accordion') {
            $advertisementSectionBlocks = AdvertisementAccordionBlock::where('advertisement_section_id', $advertisementSection->id)->get();
        }
        if($type == 'image') {
            $advertisementSectionBlocks = AdvertisementImageBlock::where('advertisement_section_id', $advertisementSection->id)->get();
        }
        if($type == 'video') {
            $advertisementSectionBlocks = AdvertisementVideoBlock::where('advertisement_section_id', $advertisementSection->id)->get();
        }

        return view('users.advertisements.show-section-blocks', compact('id', 'type', 'advertisementSection', 'advertisementSectionBlocks'));
    }

    // Header
    public function addHeaderBlock($id) {
        return view('users.advertisements.add-header-block', compact('id'));
    }

    public function storeHeaderBlock(Request $request) {
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
        } else {
            $imageName = '';
        }
        
        AdvertisementHeaderBlock::create([
            'advertisement_section_id' => $request->advertisementSectionId,
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imageName,
            'status' => 0
        ]);
        Session::flash('success', 'ヘッダーブロックが正常に追加されました');
        return redirect()->route('user.show.section.blocks', $request->advertisementSectionId);
    }

    public function editHeaderBlock($id) {
        $advertisementHeaderBlock = AdvertisementHeaderBlock::find($id);
        return view('users.advertisements.edit-header-block', compact('advertisementHeaderBlock'));
    }

    public function updateHeaderBlock(Request $request) {
        $updateData = [
            'title' => $request->title,
            'body' => $request->body,
        ];

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
            $updateData['image'] = $imageName;
        }

        $advertisementHeaderBlock = AdvertisementHeaderBlock::find($request->id);
        $advertisementHeaderBlock->update($updateData);
        Session::flash('success', 'ヘッダーブロックが正常に更新されました');
        return redirect()->route('user.show.section.blocks', $advertisementHeaderBlock->advertisement_section_id);
    }

    public function deleteHeaderBlock($id) {
        $advertisementHeaderBlock = AdvertisementHeaderBlock::find($id);
        AdvertisementHeaderBlock::where('id', $id)->delete();
        Session::flash('success', 'ヘッダーブロックが正常に削除されました');
        return redirect()->route('user.show.section.blocks', $advertisementHeaderBlock->advertisement_section_id);

    }

    public function updateHeaderBlockStatus(Request $request) {
        $block = AdvertisementHeaderBlock::find($request->id);
        if ($block) {
            $block->status = $request->status;
            $block->save();
            Session::flash('success', 'ヘッダーブロックのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'ヘッダーブロックステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    // Footer
    public function addFooterBlock($id) {
        $advertisementSection = AdvertisementSection::find($id);
        return view('users.advertisements.add-footer-block', compact('id', 'advertisementSection'));
    }

    public function storeFooterBlock(Request $request) {
        $name = null;
        $text = null;
        if ($request->type == "useful") {
            $name = $request->nameUseful;
        } elseif ($request->type == "social") {
            $name = $request->nameSocial;
        } elseif ($request->type == "text") {
            $text = $request->text;
        } elseif ($request->type == "contact") {
            $text = $request->address . '|' . $request->phone . '|' . $request->email;
        } elseif ($request->type == "copyRight") {
            $text = $request->copyRight;
        } elseif ($request->type == "logo") {
            if (!empty($request->logo)) {
                $logoName = time() . '.' . $request->logo->extension();
                $request->logo->move(public_path('assets/images/all'), $logoName);
            } else {
                $logoName = '';
            }
            $text = $logoName;
        }

        AdvertisementFooterBlock::create([
            'advertisement_section_id' => $request->advertisementSectionId,
            'type' => $request->type,
            'name' => $name,
            'url' => $request->url,
            'text' => $text,
            'status' => 0
        ]);
        Session::flash('success', 'フッターブロックが正常に追加されました');
        return redirect()->route('user.show.section.blocks', $request->advertisementSectionId);
    }

    public function editFooterBlock($id) {
        $advertisementFooterBlock = AdvertisementFooterBlock::find($id);
        return view('users.advertisements.edit-footer-block', compact('advertisementFooterBlock'));
    }

    public function updateFooterBlock(Request $request) {
        $updateData = [
            'type' => $request->type,
            'url' => $request->url
        ];

        if ($request->type == "useful") {
            $updateData['name'] = $request->nameUseful;
        } elseif ($request->type == "social") {
            $updateData['name'] = $request->nameSocial;
        } elseif ($request->type == "text") {
            $updateData['text'] = $request->text;
        } elseif ($request->type == "contact") {
            $updateData['text'] = $request->address . '|' . $request->phone . '|' . $request->email;
        } elseif ($request->type == "copyRight") {
            $updateData['text'] = $request->copyRight;
        } elseif ($request->type == "logo") {
            if (!empty($request->logo)) {
                $logoName = time() . '.' . $request->logo->extension();
                $request->logo->move(public_path('assets/images/all'), $logoName);
            } else {
                $logoName = '';
            }
            $updateData['text'] = $logoName;
        }

        $advertisementFooterBlock = AdvertisementFooterBlock::find($request->id);
        $advertisementFooterBlock->update($updateData);
        Session::flash('success', 'フッターブロックが正常に更新されました');
        return redirect()->route('user.show.section.blocks', $advertisementFooterBlock->advertisement_section_id);
    }

    public function deleteFooterBlock($id) {
        $advertisementHeaderBlock = AdvertisementHeaderBlock::find($id);
        AdvertisementHeaderBlock::where('id', $id)->delete();
        Session::flash('success', 'フッターブロックが正常に削除されました');
        return redirect()->route('user.show.section.blocks', $advertisementHeaderBlock->advertisement_section_id);

    }

    public function updateFooterBlockStatus(Request $request) {
        $block = AdvertisementFooterBlock::find($request->id);
        if ($block) {
            $block->status = $request->status;
            $block->save();
            Session::flash('success', 'フッターブロックのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'フッターブロックステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    // List
    public function addListBlock($id) {
        return view('users.advertisements.add-list-block', compact('id'));
    }

    public function storeListBlock(Request $request) {
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
        } else {
            $imageName = '';
        }
        
        AdvertisementListBlock::create([
            'advertisement_section_id' => $request->advertisementSectionId,
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imageName,
            'status' => 0
        ]);
        Session::flash('success', 'リストブロックが正常に追加されました');
        return redirect()->route('user.show.section.blocks', $request->advertisementSectionId);
    }

    public function editListBlock($id) {
        $advertisementListBlock = AdvertisementListBlock::find($id);
        return view('users.advertisements.edit-list-block', compact('advertisementListBlock'));
    }

    public function updateListBlock(Request $request) {
        $updateData = [
            'title' => $request->title,
            'body' => $request->body,
        ];

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
            $updateData['image'] = $imageName;
        }

        $advertisementListBlock = AdvertisementListBlock::find($request->id);
        $advertisementListBlock->update($updateData);
        Session::flash('success', 'リストブロックが正常に更新されました');
        return redirect()->route('user.show.section.blocks', $advertisementListBlock->advertisement_section_id);
    }

    public function deleteListBlock($id) {
        $advertisementListBlock = AdvertisementListBlock::find($id);
        AdvertisementListBlock::where('id', $id)->delete();
        Session::flash('success', 'リストブロックが正常に削除されました');
        return redirect()->route('user.show.section.blocks', $advertisementListBlock->advertisement_section_id);

    }

    public function updateListBlockStatus(Request $request) {
        $block = AdvertisementListBlock::find($request->id);
        if ($block) {
            $block->status = $request->status;
            $block->save();
            Session::flash('success', 'リストブロックのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'リストブロックステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    // Box
    public function addBoxBlock($id) {
        return view('users.advertisements.add-box-block', compact('id'));
    }

    public function storeBoxBlock(Request $request) {
        AdvertisementBoxBlock::create([
            'advertisement_section_id' => $request->advertisementSectionId,
            'title' => $request->title,
            'body' => $request->body,
            'status' => 0
        ]);

        Session::flash('success', 'ボックスブロックが正常に追加されました');
        return redirect()->route('user.show.section.blocks', $request->advertisementSectionId);
    }

    public function editBoxBlock($id) {
        $advertisementBoxBlock = AdvertisementBoxBlock::find($id);
        return view('users.advertisements.edit-box-block', compact('advertisementBoxBlock'));
    }

    public function updateBoxBlock(Request $request) {
        $updateData = [
            'title' => $request->title,
            'body' => $request->body,
        ];

        $advertisementBoxBlock = AdvertisementBoxBlock::find($request->id);
        $advertisementBoxBlock->update($updateData);
        Session::flash('success', 'ボックスブロックが正常に更新されました');
        return redirect()->route('user.show.section.blocks', $advertisementBoxBlock->advertisement_section_id);
    }

    public function deleteBoxBlock($id) {
        $advertisementBoxBlock = AdvertisementBoxBlock::find($id);
        AdvertisementBoxBlock::where('id', $id)->delete();
        Session::flash('success', 'ボックスブロックが正常に削除されました');
        return redirect()->route('user.show.section.blocks', $advertisementBoxBlock->advertisement_section_id);

    }

    public function updateBoxBlockStatus(Request $request) {
        $block = AdvertisementBoxBlock::find($request->id);
        if ($block) {
            $block->status = $request->status;
            $block->save();
            Session::flash('success', 'ボックスブロックのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'ボックスブロックステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    // Accordion
    public function addAccordionBlock($id) {
        return view('users.advertisements.add-accordion-block', compact('id'));
    }

    public function storeAccordionBlock(Request $request) {
        AdvertisementAccordionBlock::create([
            'advertisement_section_id' => $request->advertisementSectionId,
            'title' => $request->title,
            'status' => 0
        ]);

        Session::flash('success', 'アコーディオンブロックが正常に追加されました');
        return redirect()->route('user.show.section.blocks', $request->advertisementSectionId);
    }

    public function editAccordionBlock($id) {
        $advertisementAccordionBlock = AdvertisementAccordionBlock::find($id);
        return view('users.advertisements.edit-accordion-block', compact('advertisementAccordionBlock'));
    }

    public function updateAccordionBlock(Request $request) {
        $updateData = [
            'title' => $request->title,
        ];

        $advertisementAccordionBlock = AdvertisementAccordionBlock::find($request->id);
        $advertisementAccordionBlock->update($updateData);
        Session::flash('success', 'アコーディオンブロックが正常に更新されました');
        return redirect()->route('user.show.section.blocks', $advertisementAccordionBlock->advertisement_section_id);
    }

    public function deleteAccordionBlock($id) {
        $advertisementAccordionBlock = AdvertisementAccordionBlock::find($id);
        AdvertisementAccordionBlock::where('id', $id)->delete();
        Session::flash('success', 'アコーディオンブロックが正常に削除されました');
        return redirect()->route('user.show.section.blocks', $advertisementAccordionBlock->advertisement_section_id);

    }

    public function updateAccordionBlockStatus(Request $request) {
        $block = AdvertisementAccordionBlock::find($request->id);
        if ($block) {
            $block->status = $request->status;
            $block->save();
            Session::flash('success', 'アコーディオンブロックのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'アコーディオンブロックステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    // Image
    public function addImageBlock($id) {
        return view('users.advertisements.add-image-block', compact('id'));
    }

    public function storeImageBlock(Request $request) {
        AdvertisementImageBlock::create([
            'advertisement_section_id' => $request->advertisementSectionId,
            'title' => $request->title,
            'status' => 0
        ]);

        Session::flash('success', '画像ブロックが正常に追加されました');
        return redirect()->route('user.show.section.blocks', $request->advertisementSectionId);
    }

    public function editImageBlock($id) {
        $advertisementImageBlock = AdvertisementImageBlock::find($id);
        return view('users.advertisements.edit-image-block', compact('advertisementImageBlock'));
    }

    public function updateImageBlock(Request $request) {
        $updateData = [
            'title' => $request->title,
        ];

        $advertisementImageBlock = AdvertisementImageBlock::find($request->id);
        $advertisementImageBlock->update($updateData);
        Session::flash('success', '画像ブロックが正常に更新されました');
        return redirect()->route('user.show.section.blocks', $advertisementImageBlock->advertisement_section_id);
    }

    public function deleteImageBlock($id) {
        $advertisementImageBlock = AdvertisementImageBlock::find($id);
        AdvertisementImageBlock::where('id', $id)->delete();
        Session::flash('success', '画像が正常に削除されました');
        return redirect()->route('user.show.section.blocks', $advertisementImageBlock->advertisement_section_id);

    }

    public function updateImageBlockStatus(Request $request) {
        $block = AdvertisementImageBlock::find($request->id);
        if ($block) {
            $block->status = $request->status;
            $block->save();
            Session::flash('success', '画像ブロックのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', '画像ブロックステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    public function getImageHovers() {
        return view('users.advertisements.image-hovers');
    }

    // Video
    public function addVideoBlock($id) {
        return view('users.advertisements.add-video-block', compact('id'));
    }

    public function storeVideoBlock(Request $request) {
        
        AdvertisementVideoBlock::create([
            'advertisement_section_id' => $request->advertisementSectionId,
            'title' => $request->title,
            'body' => $request->body,
            'url' => $request->url,
            'status' => 0
        ]);
        Session::flash('success', '動画ブロックが正常に追加されました');
        return redirect()->route('user.show.section.blocks', $request->advertisementSectionId);
    }

    public function editVideoBlock($id) {
        $advertisementVideoBlock = AdvertisementVideoBlock::find($id);
        return view('users.advertisements.edit-video-block', compact('advertisementVideoBlock'));
    }

    public function updateVideoBlock(Request $request) {
        $updateData = [
            'title' => $request->title,
            'body' => $request->body,
            'url' => $request->url,
        ];

        $advertisementVideoBlock = AdvertisementVideoBlock::find($request->id);
        $advertisementVideoBlock->update($updateData);
        Session::flash('success', '動画ブロックが正常に更新されました');
        return redirect()->route('user.show.section.blocks', $advertisementVideoBlock->advertisement_section_id);
    }

    public function deleteVideoBlock($id) {
        $advertisementVideoBlock = AdvertisementVideoBlock::find($id);
        AdvertisementVideoBlock::where('id', $id)->delete();
        Session::flash('success', '動画ブロックが正常に削除されました');
        return redirect()->route('user.show.section.blocks', $advertisementVideoBlock->advertisement_section_id);

    }

    public function updateVideoBlockStatus(Request $request) {
        $block = AdvertisementVideoBlock::find($request->id);
        if ($block) {
            $block->status = $request->status;
            $block->save();
            Session::flash('success', '動画ブロックのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', '動画ブロックステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    // Sub Block
    public function showBlockSubBlocks($type, $id) {
        if ($type == 'box') {
            $advertisementBlock = AdvertisementBoxBlock::find($id);
            $advertisementBlockSubBlocks = AdvertisementSubBoxBlock::where('advertisement_box_block_id', $advertisementBlock->id)->get();
        }

        if ($type == 'accordion') {
            $advertisementBlock = AdvertisementAccordionBlock::find($id);
            $advertisementBlockSubBlocks = AdvertisementSubAccordionBlock::where('advertisement_accordion_block_id', $advertisementBlock->id)->get();
        }

        if ($type == 'image') {
            $advertisementBlock = AdvertisementImageBlock::find($id);
            $advertisementBlockSubBlocks = AdvertisementSubImageBlock::where('advertisement_image_block_id', $advertisementBlock->id)->get();
        }
        
        return view('users.advertisements.show-block-sub-blocks', compact('id', 'type', 'advertisementBlock', 'advertisementBlockSubBlocks'));
    }

    // Sub Box Block
    public function addSubBoxBlock($id) {
        $advertisementBoxBlock = AdvertisementBoxBlock::with('advertisementSection')->with('advertisementSection.section')->where('id', $id)->first();
        $icons = Icon::where('status', 1)->get();
        return view('users.advertisements.add-sub-box-block', compact('advertisementBoxBlock', 'icons'));
    }

    public function storeSubBoxBlock(Request $request) {
        if ($request->hasFile('icon')) {
            if (!empty($request->icon)) {
                $icon = time() . '.' . $request->icon->extension();
                $request->icon->move(public_path('assets/images/all'), $icon);
            } else {
                $icon = '';
            }
        } else {
            $icon = $request->icon;
        }
        AdvertisementSubBoxBlock::create([
            'advertisement_box_block_id' => $request->advertisementBoxBlockId,
            'title' => $request->title,
            'body' => $request->body,
            'icon' => $icon,
            'status' => 0
        ]);

        Session::flash('success', 'サブボックスブロックが正常に追加されました');
        return redirect()->route('user.show.block.sub.blocks', ['type' => 'box', 'id' => $request->advertisementBoxBlockId]);
    }

    public function editSubBoxBlock($id) {
        $subBoxBlock = AdvertisementSubBoxBlock::with('advertisementBoxBlock')->with('advertisementBoxBlock.advertisementSection')
        ->with('advertisementBoxBlock.advertisementSection.section')->find($id);
        $icons = Icon::where('status', 1)->get();
        return view('users.advertisements.edit-sub-box-block', compact('subBoxBlock', 'icons'));
    }

    public function updateSubBoxBlock(Request $request) {
        $updateData = [
            'title' => $request->title,
            'body' => $request->body
        ];

        if ($request->hasFile('icon')) {
            if (!empty($request->icon)) {
                $icon = time() . '.' . $request->icon->extension();
                $request->icon->move(public_path('assets/images/all'), $icon);
                $updateData['icon'] = $icon;
            }
        } else {
            $updateData['icon'] = $request->icon;
        }

        $advertisementSubBoxBlock = AdvertisementSubBoxBlock::find($request->id);
        $advertisementSubBoxBlock->update($updateData);
        Session::flash('success', 'サブボックスブロックが正常に更新されました');
        return redirect()->route('user.show.block.sub.blocks', ['type' => 'box', 'id' => $advertisementSubBoxBlock->advertisement_box_block_id]);
    }

    public function deleteSubBoxBlock($id) {
        $advertisementSubBoxBlock = AdvertisementSubBoxBlock::find($id);
        AdvertisementSubBoxBlock::where('id', $id)->delete();
        Session::flash('success', 'サブボックスブロックが正常に削除されました');
        return redirect()->route('user.show.block.sub.blocks', ['type' => 'box', 'id' => $advertisementSubBoxBlock->advertisement_box_block_id]);
    }

    public function updateSubBoxBlockStatus(Request $request) {
        $subBlock = AdvertisementSubBoxBlock::find($request->id);
        if ($subBlock) {
            $subBlock->status = $request->status;
            $subBlock->save();
            Session::flash('success', 'サブボックスブロックのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'サブボックスブロックステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    // Sub Accordion Block
    public function addSubAccordionBlock($id) {
        $advertisementAccordionBlock = AdvertisementAccordionBlock::with('advertisementSection')->with('advertisementSection.section')->where('id', $id)->first();
        $icons = Icon::where('status', 1)->get();
        return view('users.advertisements.add-sub-accordion-block', compact('advertisementAccordionBlock', 'icons'));
    }

    public function storeSubAccordionBlock(Request $request) {
        AdvertisementSubAccordionBlock::create([
            'advertisement_accordion_block_id' => $request->advertisementAccordionBlockId,
            'title' => $request->title,
            'body' => $request->body,
            'status' => 0
        ]);

        Session::flash('success', 'サブアコーディオンブロックが正常に追加されました');
        return redirect()->route('user.show.block.sub.blocks', ['type' => 'accordion', 'id' => $request->advertisementAccordionBlockId]);
    }

    public function editSubAccordionBlock($id) {
        $subAccordionBlock = AdvertisementSubAccordionBlock::with('advertisementAccordionBlock')->with('advertisementAccordionBlock.advertisementSection')
        ->with('advertisementAccordionBlock.advertisementSection.section')->find($id);
        $icons = Icon::where('status', 1)->get();
        return view('users.advertisements.edit-sub-accordion-block', compact('subAccordionBlock', 'icons'));
    }

    public function updateSubAccordionBlock(Request $request) {
        $updateData = [
            'title' => $request->title,
            'body' => $request->body
        ];

        $advertisementSubAccordionBlock = AdvertisementSubAccordionBlock::find($request->id);
        $advertisementSubAccordionBlock->update($updateData);
        Session::flash('success', 'サブアコーディオンブロックが正常に更新されました');
        return redirect()->route('user.show.block.sub.blocks', ['type' => 'accordion', 'id' => $advertisementSubAccordionBlock->advertisement_accordion_block_id]);
    }

    public function deleteSubAccordionBlock($id) {
        $advertisementSubAccordionBlock = AdvertisementSubAccordionBlock::find($id);
        AdvertisementSubAccordionBlock::where('id', $id)->delete();
        Session::flash('success', 'サブアコーディオンブロックが正常に削除されました');
        return redirect()->route('user.show.block.sub.blocks', ['type' => 'accordion', 'id' => $advertisementSubAccordionBlock->advertisement_accordion_block_id]);
    }

    public function updateSubAccordionBlockStatus(Request $request) {
        $subBlock = AdvertisementSubAccordionBlock::find($request->id);
        if ($subBlock) {
            $subBlock->status = $request->status;
            $subBlock->save();
            Session::flash('success', 'サブアコーディオンブロックのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'サブアコーディオンブロックステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    // Sub Image Block
    public function addSubImageBlock($id) {
        $advertisementImageBlock = AdvertisementImageBlock::with('advertisementSection')->with('advertisementSection.section')->where('id', $id)->first();
        $imageHovers = ImageHover::where('status', 1)->get();
        return view('users.advertisements.add-sub-image-block', compact('advertisementImageBlock', 'imageHovers'));
    }

    public function storeSubImageBlock(Request $request) {
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
        } else {
            $imageName = '';
        }
        AdvertisementSubImageBlock::create([
            'advertisement_image_block_id' => $request->advertisementImageBlockId,
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imageName,
            'image_hover' => $request->imageHover,
            'status' => 0
        ]);

        Session::flash('success', 'サブ画像ブロックが正常に追加されました');
        return redirect()->route('user.show.block.sub.blocks', ['type' => 'image', 'id' => $request->advertisementImageBlockId]);
    }

    public function editSubImageBlock($id) {
        $subImageBlock = AdvertisementSubImageBlock::with('advertisementImageBlock')->with('advertisementImageBlock.advertisementSection')
        ->with('advertisementImageBlock.advertisementSection.section')->find($id);
        $imageHovers = ImageHover::where('status', 1)->get();
        return view('users.advertisements.edit-sub-image-block', compact('subImageBlock', 'imageHovers'));
    }

    public function updateSubImageBlock(Request $request) {
        $updateData = [
            'title' => $request->title,
            'body' => $request->body,
            'image_hover' => $request->imageHover,
        ];

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
            $updateData['image'] = $imageName;
        }

        $advertisementSubImageBlock = AdvertisementSubImageBlock::find($request->id);
        $advertisementSubImageBlock->update($updateData);
        Session::flash('success', 'サブ画像ブロックが正常に更新されました');
        return redirect()->route('user.show.block.sub.blocks', ['type' => 'image', 'id' => $advertisementSubImageBlock->advertisement_image_block_id]);
    }

    public function deleteSubImageBlock($id) {
        $advertisementSubImageBlock = AdvertisementSubImageBlock::find($id);
        AdvertisementSubImageBlock::where('id', $id)->delete();
        Session::flash('success', 'サブ画像ブロックが正常に削除されました');
        return redirect()->route('user.show.block.sub.blocks', ['type' => 'image', 'id' => $advertisementSubImageBlock->advertisement_image_block_id]);
    }

    public function updateSubImageBlockStatus(Request $request) {
        $subBlock = AdvertisementSubImageBlock::find($request->id);
        if ($subBlock) {
            $subBlock->status = $request->status;
            $subBlock->save();
            Session::flash('success', 'サブ画像ブロックのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'サブ画像ブロックステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }
}
