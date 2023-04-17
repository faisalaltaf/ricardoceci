<?php
namespace App\Http\Traits;

use App\Models\Country;
use Illuminate\Support\Facades\Request;

trait LVHTrait {

	public function validation($rules = [], $extraFields = [], $flag2 = false)
	{
			$temp = $rules;
			$rules = [];
			foreach ($temp as $value) :
					$rules = array_merge($rules, config('laravel-validation-helper.' . $value . '.rules'));
			endforeach;
			$messages = [];
			foreach ($temp as $value) :
					if (config('laravel-validation-helper.' . $value . '.messages')) :
							$messages = array_merge($messages, config('laravel-validation-helper.' . $value . '.messages'));
					endif;
			endforeach;
			foreach ($extraFields as $extra) :
					$flag = true;
					foreach ($rules as $key => &$rule) :
							if ($extra['key'] == $key) :
									foreach ($extra['value'] as $val) :
											$rule[] = $val;
									endforeach;
									$flag = false;
									$rules[$key] = $rule;
									break;
							endif;
					endforeach;
					if ($flag) :
							$rules[$extra['key']] = $extra['value'];
					endif;
					if (isset($extra['messages'])) :
							$messages = array_merge($messages, $extra['messages']);
					endif;
			endforeach;
			$validator = validator(request()->all(), $rules, $messages);
			if ($validator->fails()) :
					if ($flag2) :
							return $validator;
					else :
							return response()->json(['errors' => $validator->errors()]);
					endif;
			endif;
			return $validator->validated();
	}
}