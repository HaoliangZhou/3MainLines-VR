//index.js
//获取应用实例
const app = getApp()

Page({
  data: {
    userInfo: {},
    hasUserInfo: false,
    canIUse: wx.canIUse('button.open-type.getUserInfo'),
    // pSname:"周浩樑",
    // pSno:"172210409235",
    // pEmail:"614136484@qq.com",
    // cClass:"1722104092",
    // cMajor:"信息管理与信息系统",
    // cCollege:"经济管理学院",
    pSname: "",
    pSno: "",
    pEmail: "",
    cClass: "",
    cMajor: "",
    cCollege: "",
    // login:[],
    // textnum2:'',
    testnum:''
  },
  //事件处理函数
  bindViewTap: function() {
    wx.navigateTo({
      url: '../logs/logs'
    })
  },
  //切换账户
  toLogin:function(e){
    wx.navigateTo({
      url: '../index/login'
    })
  },

  onLoad: function (options) {
    options.id1
    options.id2
    console.log(options.id1)
    console.log(options.id2)
    if (app.globalData.userInfo) {
      this.setData({
        userInfo: app.globalData.userInfo,
        loginID: app.globalData.loginID,
        hasUserInfo: true
      })
    } else if (this.data.canIUse){
      // 由于 getUserInfo 是网络请求，可能会在 Page.onLoad 之后才返回
      // 所以此处加入 callback 以防止这种情况
      app.userInfoReadyCallback = res => {
        this.setData({
          userInfo: res.userInfo,
          hasUserInfo: true
        })
      }
    } else {
      // 在没有 open-type=getUserInfo 版本的兼容处理
      wx.getUserInfo({
        success: res => {
          app.globalData.userInfo = res.userInfo
          this.setData({
            userInfo: res.userInfo,
            hasUserInfo: true
          })
        }
      })
    }
    wx.request({
      url: 'http://localhost:88/work/exLogin.php',
      data: { wcs: options.id1}, //需要传递给url的参数
      header: { 'content-type': 'application/json' },
      method: 'GET',
      dataType: 'json',
      responseType: 'text',
      success: (result) => {
        console.log(result.data);
        this.setData({ login: result.data });
      },
      fail: () => { },
      complete: () => { }
    });

  },
  getUserInfo: function(e) {
    console.log(e)
    app.globalData.userInfo = e.detail.userInfo
    this.setData({
      userInfo: e.detail.userInfo,
      hasUserInfo: true
    })
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
    
  //   var that= this;
  //   wx.getStorageSync('testNum');
  //   console.log(wx.getStorageSync('testNum'))
  }
})
