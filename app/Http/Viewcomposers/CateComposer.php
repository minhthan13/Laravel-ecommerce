<?php
    namespace App\Http\ViewComposers;
    use Illuminate\View\View;
    use Illuminate\Support\Facades\DB;
    
    class CateComposer{
        public function compose (View $view){
            $category = DB::table("loai_san_pham")->get();
            $view -> with('ds',$category);
        }
    }
?>