<?php
    $row = array();
    foreach ($data['employee_data'] as $rows){
        $row=$rows;
    }


?>


<div class="well col-md-12 well-sm">
<form class="form-horizontal" action="index.php?action=update&id=<?php echo $row['id'];?>" method="POST">
    <fieldset>

        <!-- Form Name -->
        <legend class="text-center">Edit Employee</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fistname">First name</label>  
            <div class="col-md-4">
                <input id="fistname" name="firstname" autofocus="" placeholder="first name" value="<?php echo $row['firstname'];?>" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="lastname">Last name</label>  
            <div class="col-md-4">
                <input id="lastname" name="lastname" placeholder="last name" value="<?php echo $row['lastname'];?>" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="title">Position</label>  
            <div class="col-md-4">
                <input id="title" name="title" placeholder="position" value="<?php echo $row['title'];?>" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <div class="form-group">

            <label class="col-md-4 control-label" for="age">Age</label>  
            <div class="col-md-4">
                <input id="age" name="age" placeholder="age" value="<?php echo $row['age'];?>" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="yearofservice">Experience</label>  
            <div class="col-md-4">
                <input id="yearofservice" name="yearofservice" placeholder="experience" value="<?php echo $row['yearofservice'];?>" class="form-control input-md" required="" type="text">

            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-4 control-label" for="salary">Salary</label>  
            <div class="col-md-4">
                <input id="salary" name="salary" placeholder="salary" value="<?php echo $row['salary'];?>" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="perks">Perks</label>  
            <div class="col-md-4">
                <input id="perks" name="perks" placeholder="perks" value="<?php echo $row['perks'];?>" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>  
            <div class="col-md-4">
                <input id="email" name="email" placeholder="example@example.com" value="<?php echo $row['email'];?>" class="form-control input-md" required="" type="email">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="departmentid">Department ID</label>  
            <div class="col-md-4">
                <input id="departmentid" name="departmentid" placeholder="Department ID" value="<?php echo $row['departmentid'];?>" class="form-control input-md" type="text">
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="btn_submit"></label>
            <div class="col-md-8">
                
                <a class="btn btn-success" href="index.php?action=view">Submit</a>
            </div>
        </div>

    </fieldset>
</form>
</div>