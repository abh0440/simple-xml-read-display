<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="cw";

    //create connection
    $conn = new mysqli($servername,$username,$password,$database);
    //check conenction
    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    }

    $comp_sql = "SELECT * FROM company_info";
    $result_comp_data = $conn->query($comp_sql);

    $ceo_sql = "SELECT * FROM ceo";
    $result_ceo_data = $conn->query($ceo_sql);

    $dept_sql = "SELECT * FROM departments";
    $result_dept_data = $conn->query($dept_sql);

    $emp_sql = "SELECT * FROM employee";
    $result_emp_data = $conn->query($emp_sql);

    $xml=new DomDocument('1.0','utf-8');
    $xml->formatOutput=true;

    $css = $xml->createProcessingInstruction("xml-stylesheet", "type='text/css' href='catalog_17031025.css'");
    $xml->appendChild($css);

    //create child using createElement()
    //append child to parent using appendChild()
    //set attribute using setAttribute()

    while($rowOne = mysqli_fetch_assoc($result_comp_data)) {
        $company=$xml->createElement("company");
        $comp_data=$xml->createElement("companyData");
        $logo=$xml->createElement("imgs");
        $comp_name=$xml->createElement("Name",$rowOne["Name"]);
        $comp_address=$xml->createElement("address",$rowOne["Address"]);
        $comp_telephone=$xml->createElement("telephone",$rowOne["Phone"]);
        $comp_website=$xml->createElement("website",$rowOne["Website"]);

        $logo->setAttribute("class","logo");

        $xml->appendChild($company);
        $company->appendChild($comp_data);
        $comp_data->appendChild($logo);
        $comp_data->appendChild($comp_name);
        $comp_data->appendChild($comp_address);
        $comp_data->appendChild($comp_telephone);
        $comp_data->appendChild($comp_website);
    }

    while($rowTwo = mysqli_fetch_assoc($result_ceo_data)) {
        $ceo = $xml->createElement("ceo");
        $imgs = $xml->createElement("imgs");
        $NAME = $xml->createElement("NAME",$rowTwo["NAME"]);
        $phn = $xml->createElement("Phone",$rowTwo["Phone"]);
        $email = $xml->createElement("email",$rowTwo["email"]);

        $imgs->setAttribute("class","ceo");
        $NAME->setAttribute("type","CEO");

        $company->appendChild($ceo);
        $ceo->appendChild($imgs);
        $ceo->appendChild($NAME);
        $ceo->appendChild($phn);
        $ceo->appendChild($email);

        $departments = $xml->createElement("departments");
        $company->appendChild($departments);
    }

    while($rowThree = mysqli_fetch_assoc($result_dept_data)) {
        $department  = $xml->createElement("department");
        $dname = $xml->createElement("dname",$rowThree["dname"]);

        
        $departments->appendChild($department);
        $department->appendChild($dname);
        
        
        if($rowThree["dname"] == "Research and Development") {
            $count = 0;
            while($count < 3 && $rowFour = mysqli_fetch_assoc($result_emp_data)){
                $employee = $xml->createElement("employee");
                $imgs = $xml->createElement("imgs");
                $name = $xml->createElement("name",$rowFour["name"]);
                $phone = $xml->createElement("phone",$rowFour["phone"]);
                $salary = $xml->createElement("salary",$rowFour["salary"]);
                $add = $xml->createElement("add",$rowFour["address"]);
                $Email = $xml->createElement("Email",$rowFour["email"]);
        
                $employee->setAttribute("empID",$rowFour["empID"]);
                $imgs->setAttribute("class",$rowFour["empID"]);
                $phone->setAttribute("type","mobile");
        
                $department->appendChild($employee);
                $employee->appendChild($imgs);
                $employee->appendChild($name);
                $employee->appendChild($phone);
                $employee->appendChild($salary);
                $employee->appendChild($add);
                $employee->appendChild($Email);

                $count = $count + 1;
            } 
        }

        if($rowThree["dname"] == "Marketing") {
            $count = 0;
            while($count < 3 && $rowFour = mysqli_fetch_assoc($result_emp_data)){
                $employee = $xml->createElement("employee");
                $imgs = $xml->createElement("imgs");
                $name = $xml->createElement("name",$rowFour["name"]);
                $phone = $xml->createElement("phone",$rowFour["phone"]);
                $salary = $xml->createElement("salary",$rowFour["salary"]);
                $add = $xml->createElement("add",$rowFour["address"]);
                $Email = $xml->createElement("Email",$rowFour["email"]);
        
                $employee->setAttribute("empID",$rowFour["empID"]);
                $imgs->setAttribute("class",$rowFour["empID"]);
                $phone->setAttribute("type","mobile");
        
                $department->appendChild($employee);
                $employee->appendChild($imgs);
                $employee->appendChild($name);
                $employee->appendChild($phone);
                $employee->appendChild($salary);
                $employee->appendChild($add);
                $employee->appendChild($Email);

                $count = $count + 1;
            } 
        }

        if($rowThree["dname"] == "Human Resource") {
            $count = 0;
            while($count < 3 && $rowFour = mysqli_fetch_assoc($result_emp_data)){
                $employee = $xml->createElement("employee");
                $imgs = $xml->createElement("imgs");
                $name = $xml->createElement("name",$rowFour["name"]);
                $phone = $xml->createElement("phone",$rowFour["phone"]);
                $salary = $xml->createElement("salary",$rowFour["salary"]);
                $add = $xml->createElement("add",$rowFour["address"]);
                $Email = $xml->createElement("Email",$rowFour["email"]);
        
                $employee->setAttribute("empID",$rowFour["empID"]);
                $imgs->setAttribute("class",$rowFour["empID"]);
                $phone->setAttribute("type","mobile");
        
                $department->appendChild($employee);
                $employee->appendChild($imgs);
                $employee->appendChild($name);
                $employee->appendChild($phone);
                $employee->appendChild($salary);
                $employee->appendChild($add);
                $employee->appendChild($Email);

                $count = $count + 1;
            } 
        }

        if($rowThree["dname"] == "Mobile Development") {
            $count = 0;
            while($count < 3 && $rowFour = mysqli_fetch_assoc($result_emp_data)){
                $employee = $xml->createElement("employee");
                $imgs = $xml->createElement("imgs");
                $name = $xml->createElement("name",$rowFour["name"]);
                $phone = $xml->createElement("phone",$rowFour["phone"]);
                $salary = $xml->createElement("salary",$rowFour["salary"]);
                $add = $xml->createElement("add",$rowFour["address"]);
                $Email = $xml->createElement("Email",$rowFour["email"]);
        
                $employee->setAttribute("empID",$rowFour["empID"]);
                $imgs->setAttribute("class",$rowFour["empID"]);
                $phone->setAttribute("type","mobile");
        
                $department->appendChild($employee);
                $employee->appendChild($imgs);
                $employee->appendChild($name);
                $employee->appendChild($phone);
                $employee->appendChild($salary);
                $employee->appendChild($add);
                $employee->appendChild($Email);

                $count = $count + 1;
            } 
        }

        if($rowThree["dname"] == "Web Development") {
            $count = 0;
            while($count < 3 && $rowFour = mysqli_fetch_assoc($result_emp_data)){
                $employee = $xml->createElement("employee");
                $imgs = $xml->createElement("imgs");
                $name = $xml->createElement("name",$rowFour["name"]);
                $phone = $xml->createElement("phone",$rowFour["phone"]);
                $salary = $xml->createElement("salary",$rowFour["salary"]);
                $add = $xml->createElement("add",$rowFour["address"]);
                $Email = $xml->createElement("Email",$rowFour["email"]);
        
                $employee->setAttribute("empID",$rowFour["empID"]);
                $imgs->setAttribute("class",$rowFour["empID"]);
                $phone->setAttribute("type","mobile");
        
                $department->appendChild($employee);
                $employee->appendChild($imgs);
                $employee->appendChild($name);
                $employee->appendChild($phone);
                $employee->appendChild($salary);
                $employee->appendChild($add);
                $employee->appendChild($Email);

                $count = $count + 1;
            } 
        }
    }

    echo "<xmp>".$xml->saveXML()."</xmp>";
    $xml->save('catalog_17031025.xml');
    //save xml as a file
?>