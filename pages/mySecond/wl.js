// pages/mySecond/wl.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    caidan1: "采购计划编制",
    caidan2: "采购管理",
    caidan3: "入库管理",
    caidan4: "出库管理",
    currentTab: 0,
    wljj: [],
  },


  viewTap1: function(e) { //点菜单带动轮播
    console.log(e.currentTarget.id)
    this.setData({
      currentTab: e.target.dataset.sid
    }) 

    wx.request({
      url: 'http://localhost:88/work/wljj.php',
      data: {wcs:e.currentTarget.id}, //需要传递给url的参数
      header: { 'content-type': 'application/json' },
      method: 'GET',
      dataType: 'json',
      responseType: 'text',
      success: (result) => {
        console.log(result.data);
        this.setData({ wljj: result.data });
      },
      fail: () => { },
      complete: () => { }
    });

  },

  wlBanner: function(e) {//滑动带动菜单
    var that = this;
    // console.log(e)
    that.setData({
      currentTab: e.detail.current
    });
  },

  enterEx: function(e){//去采购管理
    wx.navigateTo({
      url: '../myThird/cggl?id='+e.target.id
    })
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function(options) {
    wx.request({
      url: 'http://localhost:88/work/wljj.php',
      data: { wcs: 'W001' }, //需要传递给url的参数
      header: { 'content-type': 'application/json' },
      method: 'GET',
      dataType: 'json',
      responseType: 'text',
      success: (result) => {
        console.log(result.data);
        this.setData({ wljj: result.data });
      },
      fail: () => { },
      complete: () => { }
    });
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