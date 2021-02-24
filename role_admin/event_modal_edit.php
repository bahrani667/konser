<?php

include "../koneksi.php";

$mbl_id = $_GET["mbl_id"];

$querymobil = mysqli_query($konek, "SELECT*FROM mobil where mbl_id='$mbl_id'");
if ($querymobil == false) {
    die("Terjadi Kesalahan : " . mysqli_error($konek));
}
while ($mobil = mysqli_fetch_array($querymobil)) {

?>


    <script src="../aset/plugins/daterangepicker/moment.min.js"></script>
    <script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- page script -->


    <!-- Modal Popup Event-->
    <div class="modal fade" id="open_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Event</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Nama Event</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tkt_category" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Member</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tkt_qty" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Category</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tkt_category" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">PPN</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tkt_category">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option value="cheese">Menunggu</option>
                                <option value="cheese">Berhasil</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary waves-effect waves-light ">Save</button> </div>
            </div>
        </div>
    </div>
    </div>


<?php
}

?>