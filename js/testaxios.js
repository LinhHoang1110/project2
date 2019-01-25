axios.get('http://localhost/project2/model/test.php?class=9')
    .then(function (response) {
        // handle success
        console.log(response);
        // document.body.innerText = response.data;
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })
    .then(function () {
        // always executed
    });

// Create an instance using the config defaults provided by the library
// At this point the timeout config value is `0` as is the default for the library
// const instance = axios.create();

// Override timeout default for the library
// Now all requests using this instance will wait 2.5 seconds before timing out
// instance.defaults.timeout = 2500;

// Override timeout for this request as it's known to take a long time
// instance.get('http://localhost/project2/model/test.php', {
//     timeout: 5000
//     })
//     .then(function (response) {
//     // handle success
//     console.log(response);
//     document.body.innerText = response.data;
//     })
//     .catch(function (error) {
//         // handle error
//         console.log(error);
//     })
//     .then(function () {
//         // always executed
//     });
// ;