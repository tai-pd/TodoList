
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Work name</th>
            <th scope="col">Start date</th>
            <th scope="col">End date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if(isset($data) && count($data['works']) > 0) : ?>
            <? foreach($data['works'] as $k=>$work) : ?>
                <tr>
                    <td scope="row"><?echo $k+1 ?></td>
                    <td><?echo $work->name ?></td>
                    <td><?echo date_format(new DateTime($work->start_date), 'Y/m/d') ?></td>
                    <td><?echo date_format(new DateTime($work->end_date), 'Y/m/d') ?></td>
                    <td><?echo $work->status ?></td>
                    <td>
                        <button data-mode="edit" data-work_id="<?echo $work->id?>" class="btn btn-info" data-toggle="modal" data-target="#workModal" id="btn-edit">Edit</button>
                        <button data-work_id="<?echo $work->id?>" class="btn btn-danger" id="btn-delete">Delete</button>
                    </td>
                </tr>
            <? endforeach ?>
        <?php else : ?>
            <tr>
                <td class="text-center" colspan="6">Empty Data</td>
            </tr
        <?php endif ?>
    </tbody>
</table> 
