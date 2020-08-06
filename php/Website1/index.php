<?php include 'server-info.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>System Info</title>
</head>
<body>
	<div>
		<h1>Server and File Info</h1>
        <?php if ($server):?>
            <ul>
                <?php foreach ($server as $keys => $values):?>
                   <li>
                      <strong><?php echo $keys;?>:</strong>
                      <?php echo $values;?>
                  </li>
              <?php endforeach;?>
          </ul>
      <?php endif;?>
  </div>
</body>
</html>
