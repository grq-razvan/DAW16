  function createChart(data) {
  	var nativeJSObject = JSON.parse(data);

  	var postIds = [];
    var commentsArray = [];
  	for (element in nativeJSObject) {
  		var obj = nativeJSObject[element];
  		for (var prop in obj) {
  			if (prop == "post") {
  				postIds.push(obj[prop]);
  			}
        if (prop == "comcount") {
  				var commentCount = obj[prop];

  				commentsArray.push(commentCount);

  			}
  		}
  	}

    var dataset = {
      label: "dataset",
      fillColor: "rgba(220,220,220,0.5)",
      strokeColor: "rgba(220,220,220,0.8)",
      highlightFill: "rgba(220,220,220,0.75)",
      highlightStroke: "rgba(220,220,220,1)",
      data: commentsArray
    }

  	var chartData = {
  		labels: postIds,
  		datasets: [dataset]
  	}
    return chartData;
  }
