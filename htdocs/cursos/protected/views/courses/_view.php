<tr>
    <td><?php echo CHtml::encode($data->id); ?></td>
    <td><?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?></td>
    <td><?php echo CHtml::encode($data->category->name); ?></td>
    <td><?php echo CHtml::encode($data->description); ?></td>
    <td><?php echo CHtml::encode($data->target); ?></td>
    <td><?php echo CHtml::encode($data->getEnabled()); ?></td>
</tr>