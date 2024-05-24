<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute が未承認です',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => ':attribute は有効なURLではありません',
    'after' => ':attribute は :date より後の日付にしてください',
    'after_or_equal' =>  ':attribute は :date 以降の日付にしてください',
    'alpha' => ':attribute は英字のみ有効です',
    'alpha_dash' => ':attribute は「英字」「数字」「-(ダッシュ)」「_(下線)」のみ有効です',
    'alpha_num' => ':attribute は「英字」「数字」のみ有効です',
    'array' => ':attribute は配列タイプのみ有効です',
    'ascii' => 'The :attribute must only contain single-byte alphanumeric characters and symbols.',
    'before' => ':attribute は :date より前の日付にしてください',
    'before_or_equal' => ':attribute は :date 以前の日付にしてください',
    'between' => [
        'array' => ':attribute は :min ～ :max 個まで有効です',
        'file' => ':attribute は :min ～ :max キロバイトまで有効です',
        'numeric' => ':attribute は :min ～ :max までの数値まで有効です',
        'string' => ':attribute は :min ～ :max 文字まで有効です',
    ],
    'boolean' => ':attribute の値は true もしくは false のみ有効です',
    'confirmed' => ':attribute を確認用と一致させてください',
    'current_password' => 'The password is incorrect.',
    'date' => ':attribute を有効な日付形式にしてください',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => ':attribute を :format 書式と一致させてください',
    'decimal' => 'The :attribute must have :decimal decimal places.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => ':attribute を :other と違うものにしてください',
    'digits' => ':attribute は :digits 桁のみ有効です',
    'digits_between' => ':attribute は :min ～ :max 桁のみ有効です',
    'dimensions' => ':attribute ルールに合致する画像サイズのみ有効です',
    'distinct' => ':attribute に重複している値があります',
    'doesnt_end_with' => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    'email' => ':attribute メールアドレスの書式のみ有効です',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => ':attribute 無効な値です',
    'file' => ':attribute アップロード出来ないファイルです',
    'filled' => ':attribute 値を入力してください',
    'gt' => [
        'array' => ':attribute には :value 個より多くの項目が必要です。',
        'file' => ':attributeは :value キロバイトより大きい必要があります。',
        'numeric' => ':attribute は :value より大きい必要があります。',
        'string' => ':attribute は :value 文字より多い必要があります。',
    ],
    'gte' => [
        'array' => ':attribute には value 個以上の項目が必要です。',
        'file' => ':attribute は :value キロバイト以上である必要があります。',
        'numeric' => ':attribute は :value 以上である必要があります。',
        'string' => ':attribute は :value 文字以上である必要があります。',
    ],
    'image' => ':attribute 画像は「jpg」「png」「bmp」「gif」「svg」のみ有効です',
    'in' => ':attribute 無効な値です',
    'in_array' => ':attribute は :other と一致する必要があります',
    'integer' => ':attribute は整数のみ有効です',
    'ip' => ':attribute IPアドレスの書式のみ有効です',
    'ipv4' => ':attribute IPアドレス(IPv4)の書式のみ有効です',
    'ipv6' =>  ':attribute IPアドレス(IPv6)の書式のみ有効です',
    'json' => ':attribute 正しいJSON文字列のみ有効です',
    'lowercase' => 'The :attribute must be lowercase.',
    'lt' => [
        'array' => ':attribute は :value 未満の項目を持つ必要があります。',
        'file' => ':attribute は :value キロバイト未満である必要があります。',
        'numeric' => ':attribute は :value 未満である必要があります。',
        'string' => ':attribute は :value 文字未満である必要があります。',
    ],
    'lte' => [
        'array' => ':attribute は :value 以上の項目を持つ必要があります。',
        'file' =>  ':attribute は :value キロバイト以下である必要があります。',
        'numeric' => ':attribute は :value 以下である必要があります。',
        'string' => ':attribute は :value 文字以下である必要があります。',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => ':attribute は :max 個以下のみ有効です',
        'file' => ':attribute は :max KB以下のファイルのみ有効です',
        'numeric' => ':attribute は :max 以下のみ有効です',
        'string' => ':attribute は :max 文字以下のみ有効です',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => ':attribute は :values タイプのみ有効です',
    'mimetypes' => ':attribute は :values タイプのみ有効です',
    'min' => [
        'array' => ':attribute は :min 個以上のみ有効です',
        'file' => ':attribute は :min KB以上のファイルのみ有効です',
        'numeric' => ':attribute は :min 以上のみ有効です',
        'string' => ':attribute は :min 文字以上のみ有効です',
    ],
    'min_digits' => 'The :attribute must have at least :min digits.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => [
        'letters' => 'The :attribute must contain at least one letter.',
        'mixed' => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute must contain at least one number.',
        'symbols' => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => ':attribute は必須です',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' =>  ':attribute は :other が :value には必須です',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' =>':attribute は :other が :values でなければ必須です',
    'required_with' =>':attribute は :values が入力されている場合は必須です',
    'required_with_all' => ':attribute は :values が入力されている場合は必須です',
    'required_without' => ':attribute は :values が入力されていない場合は必須です',
    'required_without_all' =>  ':attribute は :values が入力されていない場合は必須です',
    'same' => ':attribute は :other と同じ場合のみ有効です',
    'size' => [
        'array' => ':attribute は :size 個のみ有効です',
        'file' =>  ':attribute は :size KBのみ有効です',
        'numeric' => ':attribute は :size のみ有効です',
        'string' =>  ':attribute は :size 文字のみ有効です',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => ':attribute は文字列のみ有効です',
    'timezone' => ':attribute 正しいタイムゾーンのみ有効です',
    'unique' =>':attribute は既に存在します',
    'uploaded' => ':attribute アップロードに失敗しました',
    'uppercase' => 'The :attribute must be uppercase.',
    'url' =>':attribute は正しいURL書式のみ有効です',
    'ulid' => 'The :attribute must be a valid ULID.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'category' => 'カテゴリー',
        'name' => '商品名',
        'description' => '商品説明',
        'price' => '値段',
        'img_src' => '画像登録',
        "email" => 'メールアドレス',
        "password" => 'パスワード',
    ],

];
