<?php
    class User_model extends CI_Model{
        public function register($enc_password){
            //user data
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password,
                'zipcode' => $this->input->post('zipcode'),

            );

            //insert user data
            return $this->db->insert('users', $data);
        }

        //check username exists
        function check_username_exists($username){
            $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
            if($this->user_model->check_username_exists($username)){
                return true;
            }else{
                return false;
            }
        }
    }