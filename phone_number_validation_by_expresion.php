//this code validate bangladeshi phone number in laravel
'mobile'   => [
      'required', 
      'string', 
      'size:11',
      'regex:/^[0]{1}[1]{1}[3-9]{1}[0-9]{8}$/',
      'unique:users,nid',
  ],
