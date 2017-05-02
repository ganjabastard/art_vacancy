<?php

namespace App\Helpers;
use App\Models\Lang\LangTranslate;
use App\Models\Lang\LangLocale;
use Illuminate\Http\RedirectResponse;
use Transliteration;
class Helper
{
    /**
     * Save new translate
     * @param $request
     * @return mixed
     */
    public static function createLang($request)
    {
        $key = key($request);
        if(isset($key)) {
            $keyTrans = Transliteration::clean_filename($key);
            $translate = LangTranslate::updateOrCreate(['name' => $keyTrans]);
            LangLocale::where('translate_id', $translate->id)->delete();
            if (count($request) > 0)
                foreach ($request[$key] as $lang => $locale)
                    if($locale != '')
                        LangLocale::create(['translate_id' => $translate->id, 'locale' => $lang, 'value' => $locale]);
            return $translate->id;
        } else
            return false;
    }

    /**
     * get tranlate
     * @param $request
     * @return null
     */
    public static function getLang($request)
    {
        if(is_int($request))
            $translate = LangTranslate::where('id', $request)->with('locale')->get()->first();
        else
            $translate = LangTranslate::where('name', $request)->with('locale')->get()->first();
        return  ($translate->locale != null) ? $translate->locale->value : null;
    }


}