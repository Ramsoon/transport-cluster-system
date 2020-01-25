<?php
$navy = mysqli_connect("localhost","root","","navy") or die("error in connecting to server:");
$metab = "CREATE TABLE deploiy(
pid int(4) PRIMARY KEY,
fullName VARCHAR(100) NOT NULL,
sex VARCHAR(6) NOT NULL,
state VARCHAR(100) NOT NULL,
HeighestQaul VARCHAR(100) NOT NULL,
WorkExp VARCHAR(100) NOT NULL,
hopi VARCHAR(100) NOT NULL,
mresult VARCHAR(100) NOT NULL,
dremark VARCHAR(100) NOT NULL,
deploystate VARCHAR(100) NOT NULL,
seaport VARCHAR(100) NOT NULL,
deploy_date TIMESTAMP
)";
if (mysqli_query($navy, $metab)) {
    echo "Table NEW deploy created successfully";
} else {
    echo "Error creating table: " . mysqli_error($navy);
}

mysqli_close($navy);
?>