<html>
   <body>
      
      <?php
         echo Form::open(array('url' => '/uploadfile','files'=>'true'));
         echo 'Select the file to upload.';
         echo Form::file('image');
         echo Form::submit('Upload File');
         echo Form::close();
      ?>

      <h3>
            <a href="http://41.43.53.38:8000/git/push">- Push server</a>
      </h3>
   
   </body>
</html>