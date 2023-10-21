Register - <a href="/">Home</a><br/><br/>
<form method="post" action="/user/doRegister" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Username</td><td> : </td><td><input type="text" name="username"/></td>
        </tr>
        <tr>
            <td>Email</td><td> : </td><td><input type="text" name="email"/></td>
        </tr>
        <tr>
            <td>Password</td><td> : </td><td><input type="password" name="password"/></td>
        </tr>
        <tr>
            <td>       
            <label for="photo">Upload Foto:</label>
            <input type="file" name="image" id="image" required>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"/></td>
        </tr>
    </table>
</form>