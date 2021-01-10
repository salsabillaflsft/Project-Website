<html>
    <head>
    <title>LYRICS</title>
    </head>
<body>
    <table border=1>
        <tr>
            <td>title</td>
            <td>album</td>
            <td>single</td>
            <td>genre</td>
            <td>writter</td>
            <td>lyrics</td>
        </tr>
         <?php
        include 'connect.php';
        $id_lyrics=$_GET['id_lyrics'];
        $query=mysqli_query($conn,"select * from ((song left join genre on song.id_genre=genre.id_genre) left join jenis on song.id_jenis=jenis.id_jenis) left join lyrics on song.id_lyrics=lyrics.id_lyrics where id_song='$id_lyrics'");
        while($data=mysqli_fetch_array($query))
        { ?>
            <tr>
                <td> <?php echo $data['title']?></td>
                <td> <?php echo $data['album']?></td>
                <td> <?php echo $data['single']?></td>
                <td> <?php echo $data['genre_name']?></td>
                <td> <?php echo $data['writter']?></td>
                <td> <?php echo $data['desc_lyrics']?></td>
                <!-- if id_lyrics ada = tampilan lirik + ada tempat utk submit rating (yg bisa dihapus user) [DELETE]-->
                </tr>
        <?php
        }
        ?>
        
    </table>  
</body>
</html>
