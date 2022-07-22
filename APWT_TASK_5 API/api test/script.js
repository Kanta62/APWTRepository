fetch("http://127.0.0.1:8000/api/products/list").then(
        response => {
            response.json().then(
                data => {
                    console.log(data);
                    if (data.length > 0) {
                        var getData = "";
                        data.forEach((object) => {
                            getData += "<tr>";
                            getData += "<td>" + object.id + "</td>";
                            getData += "<td>" + object.name + "</td>";
                            getData += "<td>" + object.amount + "</td>";
                            getData += "<td>" + object.address + "</td></td>";
                            getData += "<td>" + object.date + "</td>";
                        })
                        document.getElementById("loadData").innerHTML = getData;
                    }
                }
            )
        }
    )