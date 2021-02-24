<?php

session_start();
error_reporting(0);
include "../koneksi/koneksi.php";



$ticket_id = $_GET["id"];



$qureyticket = mysqli_query($konek, "SELECT * FROM tbl_ticket WHERE tkt_id = '$ticket_id'");
if ($qureyticket == false) {
    die("Terjadi Kesalahan : " . mysqli_error($konek));
}
while ($ticket = mysqli_fetch_array($qureyticket)) {

?>


    <div class="modal fade"  tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="event_detail_ticket_update.php" name="modal_popup" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Ticket</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" class="form-control" value="<?php echo $ticket['tkt_id']; ?>">

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Kategori ticket</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tkt_category" value="<?php echo $ticket['tkt_category']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Item Bonus</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tkt_item" value="<?php echo $ticket['tkt_item']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Size</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tkt_size" value="<?php echo $ticket['tkt_size']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Qty</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tkt_qty" value="<?php echo $ticket['tkt_qty']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Harga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tkt_price" value="<?php echo $ticket['tkt_price']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-8">
                                <input type="hidden" class="form-control" name="tkt_ppn" value="<?php echo $ticket['tkt_ppn']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-8">
                                <input type="hidden" class="form-control" value="<?php echo $ticket['event_id']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-8">
                                <input type="hidden" class="form-control" value="<?php echo $ticket['period_id']; ?>">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
                    </div>
                </div>
        </div>
    </div>
<?php } ?>