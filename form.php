<?


     $email = $_POST['email'];
     $password = $_POST['password'];







        // The header row of the CSV.

        // The data of the CSV.
        $data = "$email,$password\n";

     
        $fileName = "uploaded_file.csv";

        /*
         * Create the CSV file.
         * If file exists, append the data to it. Otherwise create the file.
         */
        if (file_exists($fileName)) {
            // Add only data. The header is already added in the existing file.
            file_put_contents($fileName, $data, FILE_APPEND);
        } else {
            // Add CSV header and data.
            file_put_contents($fileName, $header . $data);
        }



