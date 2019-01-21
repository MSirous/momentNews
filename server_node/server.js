var io = require('socket.io')(6001)
console.log('connected to port 6001')
io.on('error', function (socket) {
    console.log('error')
})
io.on('connection', function (socket) {
    console.log('User Ip : '+socket.id)
})
var Redis = require('ioredis')
var redis = new Redis(1001)
redis.psubscribe("*", function (error, count) {

})

redis.on('pnews', function (partner, channel, news) {
    console.log(channel)
    console.log(news)
    console.log(partner)

    // console.log("test..")
    news = JSON.parse(news)
    io.emit(channel+":"+news.event, news.data.message)
    console.log('Sent')

})
