<?php
$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni cupiditate mollitia, maiores temporibus, voluptatum iure eligendi modi minima sequi voluptate ea voluptas rerum ab repudiandae fugiat quas doloribus labore facilis? Neque praesentium iusto, quod nobis recusandae voluptates enim sed optio explicabo nisi voluptatibus, exercitationem temporibus laudantium eligendi inventore unde placeat repudiandae adipisci accusamus minima fugit dolor? Necessitatibus molestias praesentium obcaecati dolorum inventore nulla fuga omnis recusandae, placeat optio libero ad impedit doloribus autem eos nobis maxime temporibus provident! Dolorum culpa aliquam architecto quod soluta minima dolores aliquid hic, velit et, voluptatibus consequuntur molestias consequatur possimus aspernatur molestiae repellat ullam nulla. Temporibus quam error enim laudantium quaerat minus doloremque velit quos optio, voluptates quis praesentium culpa aperiam facere molestiae veniam ullam exercitationem in maxime modi vel iure at a. Vero ad soluta quam at illum aut impedit, officia deleniti dolores provident incidunt dicta adipisci enim exercitationem dignissimos. Voluptate debitis voluptas itaque minima placeat quod voluptatum at vitae perferendis aliquid laboriosam, amet recusandae labore pariatur eligendi sapiente velit architecto, consectetur aut consequatur quos obcaecati sunt? Aut minima voluptatibus qui nemo unde nulla velit enim! Blanditiis, inventore vel! Voluptates, nam. Porro, quisquam ea nam earum nisi, perferendis numquam placeat adipisci provident natus mollitia!';
$badword = $_GET['badword'];
$paragraph_corrected = str_replace($badword, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>
</head>
<body>
  <h2>Il paragrafo è il seguente:</h2>
  <p><?php echo $paragraph ?></p>
  <h2>Il paragrafo è lungo <?php echo strlen($paragraph) ?> caratteri</h2>
  <h2>Il paragrafo corretto è il seguente:</h2>
  <p><?php echo $paragraph_corrected ?></p>
  <h2>Il paragrafo corretto è lungo <?php echo strlen($paragraph_corrected) ?> caratteri</h2>
</body>
</html>

