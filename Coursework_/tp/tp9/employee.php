<?php
    if (isset($_POST["employee_id"])) {
        $employee_id = $_POST["employee_id"];
        $employee_name = $_POST["employee_name"];
        $employee_department = $_POST["employee_department"];
        $employee_email = $_POST["employee_email"];

        $db = new Employee();

        $db->saveEmployeeData($employee_id, $employee_name, $employee_department, $employee_email);

    }
?>

<div class="p-4">
    <h1 class="text-2xl">Employee Data</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="employee_id">ID</label>
                </td>
                <td>
                    <input type="text" name="employee_id" id="employee_id" class="form-input mx-2 p-1 rounded-md">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="employee_name">Name</label>
                </td>
                <td>
                    <input type="text" name="employee_name" id="employee_name" class="form-input mx-2 p-1 rounded-md">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="employee_department">Department</label>
                </td>
                <td>
                    <input type="text" name="employee_department" id="employee_department" class="form-input mx-2 p-1 rounded-md">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="employee_email">Address</label>
                </td>
                <td>
                    <input type="text" name="employee_email" id="employee_email" class="form-input mx-2 p-1 rounded-md">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="px-4 py-2 my-4 rounded-md shadow-xl bg-dark text-ext3 hover:bg-ext2 hover:text-dark" value="Save">
                </td>
            </tr>
        </table>
    </form>
    <br>
    <table class="table border-collapse table-auto">
        <tr>
            <th class="bg-ext3 border border-ext2 px-8 py-4">ID</th>
            <th class="bg-ext3 border border-ext2 px-8 py-4">Name</th>
            <th class="bg-ext3 border border-ext2 px-8 py-4">Department</th>
            <th class="bg-ext3 border border-ext2 px-8 py-4">Address</th>
        </tr>
        <?php
            $db = new Employee();

            $data = $db->getEmployeeData();
            foreach ($data as $index => $item) {
                echo "<tr>" .
                    "<td class='border border-ext2 py-2 px-4'>" . $item['employee_id'] . "</td>" .
                    "<td class='border border-ext2 py-2 px-4'>" . $item['employee_name'] . "</td>" .
                    "<td class='border border-ext2 py-2 px-4'>" . $item['employee_department'] . "</td>" .
                    "<td class='border border-ext2 py-2 px-4'>" . $item['employee_email'] . "</td>" .
                    "</tr>";
            }
        ?>
    </table>
</div>