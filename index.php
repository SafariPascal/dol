<?php
class Myclass {
    public function heading() {
        echo "Welcome to BBIT DevOps !";
    }
    public function myMethod() {
        echo "<p> This is a new semester. </p>";
    }

    public function footer () {
        echo "<footer> Contact us at <a href='mailto:info@bbit.edu'>info@bbit.edu</a></footer>";
    }

}

//create an instance of Myclass
$instance = new Myclass();

//call the method myMethod
$instance->heading();
$instance->myMethod();
$instance->footer();