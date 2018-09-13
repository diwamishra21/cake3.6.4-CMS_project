<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-white margin-bottom-xl">
            <div class="padding-md">
                <div class="text-center">
                    <h3>Add Access List</h3>
                </div>
                <hr>
                <?php
                echo $this->Form->create('');
                ?>
                <div class="row margin-top-lg">
                    <div class="col-sm-8">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="level" class="padding-top-md">Category</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control level" name="parent_id">
                                    <option value="0">Please select</option>
                                    <?php
                                    if (!empty($aCatData)) {
                                        foreach ($aCatData as $id => $ac) {
                                            echo '<option value="' . $id . '">' . $ac . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group row" id="opt_sec">

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="name" class="padding-top-md">New Child</label>
                            </div>
                            <div class="col-md-9">
                                <input id="name" class="form-control" placeholder="Name" name="child" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 padding-bottom-lg text-center margin-top-lg">
                    <button type="submit" class="btn btn-danger padding-left-lg padding-right-lg">Submit</button>
                </div>
                <?php
                echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
    $(document).ready(function () {
        $(document).on('change', '.level', function () {
            var level = $(this).val();
            if (level != 0) {
                $(this).prop('name','parent_id');
                $.ajax({
                    url: webroot + 'supervisor/getAccOpt/' + level
                }).done(function (data) {
                    if (data != "") {
                        var html = "";
                        html += '<div calss="col-md-3"><label class="padding-top-md">Sub Category</label></div><div class="col-md-9">' +
                                '<select class="form-control level">' +
                                '<option value="0">Please select</option>' +
                                data +
                                '</select>' +
                                '</div>';
                        $('#opt_sec').append(html);
                    }
                });

            }
        });
    });
</script>