<html>
    <body>
        <h1> Buat Account Baru!</h1>
        <h4> Sign Up Form</h4>
        
        <div> 

            <form action="/helo" method="POST">
                @csrf
                <p> First name:</p>

                <input type="text" name="first_name">

                <p> Last name:</p>
    
                <input type="text" name="last_name">

                <p> Gender:</p>
            
                <input type="radio" name="gender" value="0"> Male <br>
                <input type="radio" name="gender" value="1"> Female <br>
                <input type="radio" name="gender" value="2"> Other

                <p> Nationality:</p>

                <select>
                    <option value="indonesia">Indonesian</option>
                    <option value="malaysia">Malaysia</option>
                    <option value="singapura">Singapore</option>
                    <option value="australia">Australia</option>
                </select>


                <p> Language Spoken:</p>

                <input type="checkbox" name="language_spoken" value="bahasa"> Bahasa Indonesia <br>
                <input type="checkbox" name="language_spoken" value="bahasa1"> English <br>
                <input type="checkbox" name="language_spoken" value="bahasa2"> Other

                <p> Bio:</p>

                <textarea cols="28" rows="7"></textarea> <br>

                <button type="submit">Sign Up</button>
            </form>
            
            
        </div>

    </body>
</html>