<tr>
    <td><?php echo CHtml::encode($data->id) ?></td>
    <td><?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?></td>
    <td><?php echo CHtml::encode($data->description); ?></td>
</tr>