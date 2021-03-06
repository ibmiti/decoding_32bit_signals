``json
[
	{
		"id": 1,
		"rule-name": "greater than 10",
		"type": "comparison",
		"check": ">",
		"value": 10
	},
	{
		"id": 2,
		"rule-name": "equal to 10",
		"type": "comparison",
		"check": "=",
		"value": 10
	},
	{
		"id": 3,
		"rule-name": "less than 10",
		"type": "comparison",
		"check": "<",
		"value": 10
	},

	{
		"id": 4,
		"rule-name": "rose more than 5 over 7 numbers",
		"type": "delta",
		"check": ">",
		"change": 5,
		"over": 7
	},
	{
		"id": 5,
		"rule-name": "rose exactly 5 over 7 numbers",
		"type": "delta",
		"check": "=",
		"change": 5,
		"over": 7
	},
	{
		"id": 6,
		"rule-name": "less than 5 over 7 numbers",
		"type": "delta",
		"check": "<",
		"change": 5,
		"over": 7
	},


	// Extra Features they want but don't need

	{
		"id": 7,
		"rule-name": "Rose >= 5 over 7 numbers",
		"type": "composition",
		"all": [
			{
				"id": 8,
				"rule-name": "rose more than 5 over 7 numbers",
				"type": "delta",
				"check": ">",
				"change": 5,
				"over": 7
			},
			{
				"id": 9,
				"rule-name": "rose exactly 5 over 7 numbers",
				"type": "delta",
				"check": "=",
				"change": 5,
				"over": 7
			}
		]
	},
	{
		"id": 10,
		"rule-name": "has [4, 4, 4, 1]",
		"type": "pattern",
		"pattern": [4, 4, 4, 1]
	},

]
``
