<?php
$config = array(
	'login_user' => array(
		array(
			'field' => 'user',
			'lable' => 'user',
			'rules' => 'required|max_length[10]'
		),
		array(
			'field' => 'pass',
			'label' => 'pass',
			'rules' => 'required'
		)
	),

    'edit_user' => array(
        array(
            'field' => 'newpassword',
            'label' => 'newpassword',
            'rules' => 'required'
        )
    ),

    'reg_user' => array(
        array(
            'field' => 'username',
            'label' => 'username',
            'rules' => 'required|max_length[10]'
        ),
        array(
            'field' => 'newpassword',
            'label' => 'newpassword',
            'rules' => 'required'
        ),
        array(
            'field' => 'repassword',
            'label' => 'repassword',
            'rules' => 'required|matches[newpassword]'
        ),
        array(
            'field' => 'remark',
            'label' => 'remark',
            'rules' => 'required|max_length[200]'
        )
    ),

    'score_edit' => array(
        array(
            'field' => 'username',
            'label' => '用户名',
            'rules' => 'required|max_length[10]'
        ),
        array(
            'field' => 'work_name',
            'label' => '重点工作名称',
            'rules' => 'required|max_length[30]'
        ),
        array(
            'field' => 'situation',
            'label' => '重点工作完成情况',
            'rules' => 'required|max_length[200]'
        ),
        array(
            'field' => 'self_rating',
            'label' => '自评',
            'rules' => 'required|numeric'
        ),
        array(
            'field' => 'grade',
            'label' => '赋分',
            'rules' => 'required|numeric'
        ),
        array(
            'field' => 'captain',
            'label' => '赋分人',
            'rules' => 'required|max_length[10]'
        )
    ),

    'score_staff' => array(
        array(
            'field' => 'work_name',
            'label' => '重点工作名称',
            'rules' => 'required|max_length[30]'
        ),
        array(
            'field' => 'situation',
            'label' => '重点工作完成情况',
            'rules' => 'required|max_length[200]'
        ),
        array(
            'field' => 'self_rating',
            'label' => '自评',
            'rules' => 'required|numeric'
        )
    ),

    'grade_do' => array(
        array(
            'field' => 'self_rating',
            'label' => '自评',
            'rules' => 'required|numeric'
        )
    ),

);