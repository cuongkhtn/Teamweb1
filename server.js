var io = require('socket.io')
console.log('Connected to port 6002')
io.on('error',function(socket){
	console.log('error')
})
io.on('connection',function(socket){
	console.log('Tao mệc quá'+socket.id)

})
var Redis = require('ioredis')
var redis = new Redis(process.env.PORT || 1000)
redis.psubscribe("*",function(error,count){
	//
})
redis.on('pmessage',function(partner,channel,message){
	console.log(channel)
	console.log(message)
	console.log(partner)

	message = JSON.parse(message)
	io.emit(channel+":"+message.event,message.data.comment)
	console.log('Sent')
})