<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Setting Create</h3>
                </div>
                <form action="index.php?route=sstore" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Key">Key</label>
                            <input type="text" name="key" id="Key" class="form-control" placeholder="Enter Key">
                        </div>
                        <div class="form-group">
                            <label for="Value">Value</label>
                            <input type="text" name="value" id="Value" class="form-control" placeholder="Enter Value">
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0">Non-Active</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>