<pre>
<table class="table table-striped">
<thead> 
    <tr> <th>#</th> <th> Name</th> <th>Last Name</th> <th>Username</th> </tr> 
</thead> 

<tbody> 
<?php
if (count($users) > 0 ) {
    echo 'LIST  ....';
    print_r($users);
} else {
    echo 'Not found';
}

foreach ($users as $key => $value) {
    echo '
<tr> 
<th scope="row">' . $value['id'] . '</th>' .
'<td>' . $value['username'] . '</td>' .
'<td>' . $value['password'] . '</td>' .
'<td>' . $value['email'] . '</td>' .
'</tr>';
}
?>

</tbody>


</table>
</pre>