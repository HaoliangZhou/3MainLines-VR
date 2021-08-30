// pages/index/login.js
const app = getApp()

Page({

  /**
   * 页面的初始数据
   */
  data: {
    userName: '',
    pasWInput: '',
    dateValue: '2019-09-18',
    loginID:'',
    testnum:''

  },
  datePickerBindchange: function(e) {
    this.setData({
      dateValue: e.detail.value
    })
  },

  bindFormSubmit: function(e) {
    console.log(e.detail.value.userSno),
    // app.globalData.loginID=e.detail.value
    // var that= this;
    // wx.setStorageSync('testnum', e.detail.value)
    //wx.setStorageSync('testNum',e.detail.value);
    wx.reLaunch({
      url: '../index/index?id1=' + e.detail.value.userSno,
    });
  },

  // login: function (e) {
  //   wx.switchTab({
  //     url: '../index/index'
  //   })
  // },
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