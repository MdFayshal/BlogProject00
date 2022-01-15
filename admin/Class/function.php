<?php

    class blogAdmin{

        private $conn;


        public function __construct()
        {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "blogproject";

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

            if(!$this->conn){
                die('Database Connection Error !!!');
            }
        }

        public function admin_login($data){
            $admin_email = $data['admin_email'];
            $admin_pass = md5($data['admin_pass']);

            $query = "SELECT * FROM admin_info WHERE admin_email='$admin_email' && admin_pass ='$admin_pass'";

            if(mysqli_query($this->conn, $query)){
                 $admin_info = mysqli_query($this->conn, $query);
                 if($admin_info){
                     header("location:dashboard.php");
                     $admin_data=mysqli_fetch_assoc($admin_info);
                     session_start();
                     $_SESSION['adminid'] = $admin_data['id'];
                     $_SESSION['admin_name'] = $admin_data['admin_name'];
                     $_SESSION['admin_email'] = $admin_data['admin_email'];
                     $_SESSION['admin_pass'] = $admin_data['admin_pass'];
                
                }
            }
            

        }
        public function admin_logout(){
            unset($_SESSION['adminid']);
            unset($_SESSION['admin_name']);
            unset($_SESSION['admin_email']);
            unset($_SESSION['admin_pass']);

            header("location:index.php");

        }
        public function add_category($data){
            $cat_name = $data['cat_name'];
            $cat_des = $data['cat_des'];

            $query = "INSERT INTO category (cat_name, cat_des) VALUES ('$cat_name', '$cat_des')";
            if(mysqli_query($this->conn, $query)){
                return "Category Added Successgully. . .";
            }

        }
        public function display_category(){

            $query="SELECT * FROM category";

            if(mysqli_query($this->conn, $query)){
                $cat_data =mysqli_query($this->conn, $query);
                return $cat_data;
            }
        }
        public function get_cat_info($id){

            $query = "SELECT * FROM category WHERE cat_id = $id";  
            if(mysqli_query($this->conn, $query)){
                $cat_info =  mysqli_query($this->conn, $query);
                $cat_data = mysqli_fetch_assoc($cat_info);
                return $cat_data;
            }

        }
        public function update_category($data){
            
            $edit_id = $data['edit_cat_id'];
            $cat_name = $data['change_cat_name'];
            $cat_des = $data['change_cat_des'];
            $query = "UPDATE category SET cat_name = '$cat_name', cat_des = '$cat_des' WHERE cat_id = $edit_id";
            if(mysqli_query($this->conn, $query)){
                return "Post Update Successfully . . .";
            }

        }
        public function delete_category($id){
            
            $query = "DELETE FROM category WHERE cat_id = $id";
            
            if(mysqli_query($this->conn, $query)){
                return " Catagory Deleted Successfully . . . ";
            }
        }
        public function add_post($data){
            $post_title = $data['post_title'];
            $post_content = $data['post_content'];
            $post_img = $_FILES['post_img']['name'];
            $Post_tmp_name = $_FILES['post_img']['tmp_name'];
            $post_cat = $data['post_cat'];
            $post_summery = $data['post_summery'];
            $post_tag = $data['post_tag'];
            $post_status = $data['post_status'];

            $query = "INSERT INTO posts(post_title, post_content, post_img, post_ctg, post_author, post_date, post_comment_count, post_summery, post_tag, post_status) VALUES('$post_title', '$post_content', '$post_img', $post_cat, 'Admin', now(), '3', '$post_summery', '$post_tag', $post_status)";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($Post_tmp_name,'upload/'.$post_img);
                return "Post Added Successfully . . . ";
            }
        }
        public function delete_post($id){
            $get_img = "SELECT * FROM posts WHERE  post_id = $id";
            $img_info = mysqli_query($this->conn, $get_img);
            $select_img = mysqli_fetch_assoc($img_info);
            $img = $select_img['post_img'];
            $query = "DELETE FROM posts WHERE post_id = $id";
            if(mysqli_query($this->conn, $query)){
                unlink('upload/'.$img);
                return " Post Deleted Successfully . . . ";
            }
        }
        public function display_post(){
            $query = "SELECT * FROM post_with_ctg";
            if(mysqli_query($this->conn, $query)){
                $post_data = mysqli_query($this->conn, $query);
                return $post_data ;
            }
        }
        public function display_post_published(){
            $query = "SELECT * FROM post_with_ctg WHERE post_status=1";
            if(mysqli_query($this->conn, $query)){
                $post_data = mysqli_query($this->conn, $query);
                return $post_data ;
            }
        }
        public function edit_img($data){

            $id = $data['edit_img_id'];
            $img = $_FILES['change_img']['name'];
            $tmp_name = $_FILES['change_img']['tmp_name'];

            $query = "UPDATE posts SET post_img= '$img' WHERE post_id = $id";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmp_name,'upload/'.$img);
                return "Thumbnail Updated Successfully . . .";
            }

        }
        public function get_post_info($id){

            $query = "SELECT * FROM post_with_ctg WHERE post_id = $id";  
            if(mysqli_query($this->conn, $query)){
                $post_info =  mysqli_query($this->conn, $query);
                $post_data = mysqli_fetch_assoc($post_info);
                return $post_data;
            }

        }
        
        public function update_post($data){
            
            $edit_id = $data['edit_post_id'];
            $post_title = $data['change_title'];
            $post_content = $data['change_content'];
            $query = "UPDATE posts SET post_title = '$post_title', post_content = '$post_content' WHERE post_id = $edit_id";
            if(mysqli_query($this->conn, $query)){
                return "Post Update Successfully . . .";
            }

        }
        public function get_cat_post($id){
            $query = "SELECT * FROM post_with_ctg WHERE cat_id = $id";  
            if(mysqli_query($this->conn, $query)){
                $post_info =  mysqli_query($this->conn, $query);
                return $post_info;
            }


        }

    
    
    
    
    }


?>