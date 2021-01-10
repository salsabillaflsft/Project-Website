<html>
    <head>
    <title>SONG</title>
    </head>
<body>
    <table border=1>
        <tr>
            <td>chart</td>
            <td>title</td>
            <td>artist</td>
            <td>album</td>
            <td>single</td>
            <td>genre</td>
            <td>release date</td>
        </tr>
        <?php
        include 'connect.php';
        $query=mysqli_query($conn,"select * from ((song left join genre on song.id_genre=genre.id_genre) left join jenis on song.id_jenis=jenis.id_jenis) left join artist on jenis.id_artist=artist.id_artist");
        while($data=mysqli_fetch_array($query))
        { ?>
            <tr>
                <td> <?php echo $data['chart']?></td>
                <td> <?php echo $data['title']?></td>
                <td> <?php echo $data['artist_name']?></td>
                <td> <?php echo $data['album']?></td>
                <td> <?php echo $data['single']?></td>
                <td> <?php echo $data['genre_name']?></td>
                <td> <?php echo $data['release_date']?></td>
                <td> <a href=lyrics.php?id_lyrics=<?php echo $data['id_song']?>>Lihat Lirik</a></td>
                 <!-- if id_song ada = tampilan lirik + ada tempat utk submit rating (yg bisa dihapus user) (link ke lyrics.php) [DELETE]

                else if jk tdk ada = ke page lirik tdk tersedia-> ada pilihan submit lirik. 
                (link ke submit_lyrics.php) [UPDATE] -->
        <?php
        }
        ?>
        </tr>
    </table>  

    
</body>
</html>