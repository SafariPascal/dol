<?php
class Myclass {
    public function heading() {
        echo "Welcome to BBIT Sem2 !!";
    }
    public function myMethod() {
        echo "<p> Welcome to the new semester. </p>";
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