<tr>
    <td><?php echo CHtml::encode($data->id) ?></td>
    <td><?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?></td>
    <td><?php echo CHtml::encode($data->description); ?></td>
    <td><?php echo CHtml::encode($data->helpText); ?></td>
    <td><?php echo CHtml::encode($data->filename); ?></td>
    <td><?php echo $data->getEnabled(); ?></td>
</tr>