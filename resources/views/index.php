<html>
<body>

<style type="text/css">
    .container{
        width: 50%;
        margin: 0 auto;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>

</body>

Liste 1 (Full) <a href="listone">Liste1</a><br />
Liste 2 (18 -23) <a href="listtwo">Liste1</a><br />
Liste 1 (age and city) <a href="listhree">Liste1</a><br />
<br /><br />
<div class="container">
<table id="list" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Position</th>
        <th>Competences</th>
        <th>Birth Year</th>
        <th>City</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($users as $user) { ?>
        <tr>
        <td><?php echo $user->name . ' ' . $user->surname?></td>
        <td><?php echo $user->age?></td>
        <td><?php echo $user->positions->name ?></td>
        <td><?php  echo $user->competences->name?></td>
        <td><?php echo $user->getBirthday() ?></td>
        <td><?php echo $user->city ?></td>

    </tr>
    <?php }?>

    </tfoot>
</table>
</div>
<script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>


<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#list').DataTable({
            paging: false,
            ordering: false,
            info: false,
        });
    });
</script>
</html>


