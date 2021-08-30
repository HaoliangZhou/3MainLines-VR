// pages/myThird/cggl.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    currentTab:0,
    exStep0: [], 
    exStep1: [], 
    exStep2: [],
    exStep3: [], 
    exStep4: [], 
    exStep5: [], 
    exStep6: [], 
    exStep7: [],
    exExam:[],
    exPic:[],
  },

  viewTap1: function (e) { //点菜单带动轮播
    // console.log(e.target.id)
    this.setData({
      currentTab: e.target.dataset.sid
    })
  },

  wlBanner: function (e) {//滑动带动菜单
    var that = this;
    // console.log(e)
    that.setData({
      currentTab: e.detail.current
    });
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    options.id
    console.log(options.id)
    wx.request({
      url: 'http://localhost:88/work/exStep.php',
      data: { wcs:options.id},//需要传递给url的参数
      header: { 'content-type': 'application/json' },
      method: 'GET',
      dataType: 'json',
      responseType: 'text',
      success: (result) => {
        console.log(result.data);
        this.setData({ exStep0: result.data[0] });
        this.setData({ exStep1: result.data[1] });
        this.setData({ exStep2: result.data[2] });
        this.setData({ exStep3: result.data[3] });
        this.setData({ exStep4: result.data[4] });
        this.setData({ exStep5: result.data[5] });
        this.setData({ exStep6: result.data[6] });
        this.setData({ exStep7: result.data[7] });
      },
      fail: () => { },
      complete: () => { }
    });

    wx.request({
      url: 'http://localhost:88/work/exExam.php',
      data: { wcs: options.id},//需要传递给url的参数
      success: (result) => {
        console.log(result);
        this.setData({ exExam: result.data });
      },
      fail: () => { },
      complete: () => { }
    });

    wx.request({
      url: 'http://localhost:88/work/exPic.php',
      data: { wcs: options.id },//需要传递给url的参数
      success: (result) => {
        console.log(result.data);
        this.setData({ exPic: result.data });
      },
      fail: () => { },
      complete: () => { }
    });
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