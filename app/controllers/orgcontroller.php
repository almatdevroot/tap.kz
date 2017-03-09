<?

function allOrgs() {
    header("Content-type:application/json");
    header("Access-Control-Allow-Origin: *");
    $orgs = new OrgsModel();
    $json = json_encode($orgs->all());
    DB::close();
    echo $json;
}

function orgsWT($key) {
    header("Content-type:application/json");
    header("Access-Control-Allow-Origin: *");
    $orgs = new OrgsModel();
    $json = json_encode($orgs->all("WHERE `typeName` = '".$key."'"));
    DB::close();
    echo $json;
}

function orgsWTAWT($key, $id) {
    header("Content-type:application/json");
    header("Access-Control-Allow-Origin: *");
    $orgs = new OrgsModel();
    $json = json_encode($orgs->all("WHERE `typeName` = '".$key."' AND `townId` = '".$id."'"));
    DB::close();
    echo $json;
}

?>