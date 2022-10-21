<html>
    <head>
<style>
    input[type=text], select {
        width : 100%;
        padding : 12px 20px;
        margin : 8px 0;
        display : inline-block;
        border : 1px solid #ccc;
        border-radius : 4px;
        box-sizing : border-box;
    }

    input[type=submit] {
        width : 10%;
        background-color : #4CAF50;
        color : white;
        padding : 14px 20px;
        margin : 8px 0;
        border : none;
        border-radius : 4px;
        cursor : pointer;
    }

    input[type=submit]:hover{
        background-color: #45a049;
    }

    div{
        border-radius : 5px;
        background-color : #f2f2f2;
        padding : 20px;
    }

    .kotakform{
        width : 80%;
        margin : 20px auto 20 auto;
    }

    h1{
        text-align : center;
        margin : 80px auto 0 auto;
    }
    </style>
    </head>

    <body>
        <h1> Data Peserta Didik </h1>
        <div class="kotakform">
            <form action="form.php" method="POST">
                <label for="nis">NIS</label>
                <input type="text" name="nis" id="nis" placeholder="NIS anda">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="nama" id="name" placeholder="Nama Lengkap anda">
                <label for="addr">Alamat</label>
                <input type="text" name="alamat" id="addr" placeholder="Alamat anda">
                <label for="kelas">Kelas</label>
                <select name="kelas" id="kelas">
                    <option value="11"> XI </option>
                    <option value="12"> XII </option>
                </select>
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan">
                    <option value="MM"> MultiMedia </option>
                    <option value="RPL"> RPL </option>
                    <option value="TKJ"> TKJ </option>
                </select>
                <input type="submit" value="Submit">
            </form>
        </div>
</body>
</html>