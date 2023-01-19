<?php
    namespace App\Controllers;

    class Page extends BaseController{
        public function main(){
            $data = [
                'title' => 'Home Page',
                'linkcss' => 'main.css'
            ];
            return view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title' => 'About Page',
                'linkcss' => 'about.css'
            ];
            return view('pages/about', $data);

        }

        public function contact(){
            $data = [
                'title' => 'Contact Page',
                'linkcss' => 'contact.css'
            ];
            return view('pages/contact', $data);
        }
        
        public function login(){
            $data = [
                'title' => 'Login Page'
            ];
            return view('pages/loginform', $data);
        }

        public function register(){
            $data = [
                'title' => 'Register Page'
            ];
            return view('pages/regisform', $data);
        }

        public function contactlist(){
            $data = [
                'title' => 'Contact List Page'
            ];
            return view('pages/contactlist', $data);
        }
    }

?>