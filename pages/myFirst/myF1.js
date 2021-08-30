// pages/myFirst/myF1.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    indicatorDots: true,
    autoplay: true,
    interval: 4000,
    duration: 1000,
    currentTab: 1,

    imgUrls: [
      '../images/2.jpg', 
      '../images/3.jpg',
      '../images/1.jpg',        
      '../images/4.jpg',
    ]
  },


  bannerTap: function() { //点轮播中的文字,页面跳转
    wx.navigateTo({
      url: '../myFirst/detail1'
    })
  },
  scTap: function () { 
    wx.navigateTo({
      url: '../mySecond/sc'
    })
  },
  wlTap: function () {
    wx.navigateTo({
      url: '../mySecond/wl'
    })
  },
  cbTap: function () {
    wx.navigateTo({
      url: '../mySecond/cb'
    })
  },
  phbTap: function () {
    wx.navigateTo({
      url: '../mySecond/phb'
    })
  },
  tkTap: function () {
    wx.showModal({
      title: '功能暂未开放',
      content: 'not',
    })
  },
  ltTap: function () {
    wx.navigateTo({
      url: '../mySecond/lt'
    })
  },



  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function(options) {

  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function() {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function() {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function() {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function() {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function() {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function() {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function() {

  }
})