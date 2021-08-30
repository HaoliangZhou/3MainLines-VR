// pages/mySecond/lt.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    caidan1: "发表",
    caidan2: "论坛墙",
    currentTab:0,
    exLt:[],
  },

  viewTap1: function (e) { //点菜单带动轮播
    // console.log(e.currentTarget.id)
    this.setData({
      currentTab: e.target.dataset.sid
    }) 
  },

  formSubmit:function(e){
    this.setData({
      currentTab:1
    })
    console.log(e.detail.value)
    wx.request({
      url: 'http://localhost:88/work/exLt.php',
      data: { exLt1: e.detail.value},//需要传递给url的参数
      success: (result) => {
        // console.log(result);
        this.setData({ exLt: result.data });
      },
      fail: () => { },
      complete: () => { }
    });
    
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {

  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {

  }
})