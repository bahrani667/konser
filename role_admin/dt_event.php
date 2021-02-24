
<thead>
    <tr>
        <th>Event Name</th>
        <th>User</th>
        <th>Category</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php
    $queryevent= mysqli_query($konek, "SELECT tbl_event.event_id,tbl_event.event_name, tbl_user.user_nmlengkap, tbl_event.event_category, tbl_event.event_status from tbl_user INNER join tbl_event on tbl_user.user_id=tbl_event.user_id");
    if ($queryevent == false) {
        die("Terjadi Kesalahan : " . mysqli_error($konek));
    }
    while ($event = mysqli_fetch_array($queryevent)) {
    ?>
        <tr>
            <td><?php echo $event['event_name']; ?></td>
            <td><?php echo $event['user_nmlengkap']; ?></td>
            <td><?php echo $event['event_category']; ?></td>
            <td><?php echo $event['event_status']; ?></td>
            <td><a href="event_edit.php?id=<?php echo $event['event_id']; ?>"><button class="btn btn-secondary btn-sm"><i class="fa fa-pencil fa-sm"></i></button>&nbsp;</a></td>
        </tr>

</tbody>
<?php } ?>