USER_COMMENT=null
ANDROID_VERSION=10
APP_VERSION_NAME=292.0.0.31.110
BRAND=samsung
PHONE_MODEL=SM-J810G
CUSTOM_DATA=
STACK_TRACE=java.lang.RuntimeException: Unable to start activity ComponentInfo{com.instapro2.android/com.OM7753.gold.PinLockActivity}: android.view.InflateException: Binary XML file line #5 in com.instapro2.android:layout/pinlock_act: Binary XML file line #5 in com.instapro2.android:layout/pinlock_act: Error inflating class ImageView
	at android.app.ActivityThread.performLaunchActivity(ActivityThread.java:3556)
	at android.app.ActivityThread.handleLaunchActivity(ActivityThread.java:3703)
	at android.app.servertransaction.LaunchActivityItem.execute(LaunchActivityItem.java:83)
	at android.app.servertransaction.TransactionExecutor.executeCallbacks(TransactionExecutor.java:135)
	at android.app.servertransaction.TransactionExecutor.execute(TransactionExecutor.java:95)
	at android.app.ActivityThread$H.handleMessage(ActivityThread.java:2216)
	at android.os.Handler.dispatchMessage(Handler.java:107)
	at android.os.Looper.loop(Looper.java:237)
	at android.app.ActivityThread.main(ActivityThread.java:7948)
	at java.lang.reflect.Method.invoke(Native Method)
	at com.android.internal.os.RuntimeInit$MethodAndArgsCaller.run(RuntimeInit.java:493)
	at com.android.internal.os.ZygoteInit.main(ZygoteInit.java:1075)
Caused by: android.view.InflateException: Binary XML file line #5 in com.instapro2.android:layout/pinlock_act: Binary XML file line #5 in com.instapro2.android:layout/pinlock_act: Error inflating class ImageView
Caused by: android.view.InflateException: Binary XML file line #5 in com.instapro2.android:layout/pinlock_act: Error inflating class ImageView
Caused by: java.lang.UnsupportedOperationException: Failed to resolve attribute at index 5: TypedValue{t=0x2/d=0x7f040998 a=-1}
	at android.content.res.TypedArray.getColorStateList(TypedArray.java:596)
	at android.widget.ImageView.<init>(ImageView.java:225)
	at android.widget.ImageView.<init>(ImageView.java:188)
	at X.4jj.<init>(Unknown Source:12)
	at X.2AN.A01(Unknown Source:220)
	at X.28I.onCreateView(Unknown Source:38)
	at android.view.LayoutInflater.tryCreateView(LayoutInflater.java:1061)
	at android.view.LayoutInflater.createViewFromTag(LayoutInflater.java:997)
	at android.view.LayoutInflater.createViewFromTag(LayoutInflater.java:961)
	at android.view.LayoutInflater.rInflate(LayoutInflater.java:1123)
	at android.view.LayoutInflater.rInflateChildren(LayoutInflater.java:1084)
	at android.view.LayoutInflater.rInflate(LayoutInflater.java:1126)
	at android.view.LayoutInflater.rInflateChildren(LayoutInflater.java:1084)
	at android.view.LayoutInflater.inflate(LayoutInflater.java:682)
	at android.view.LayoutInflater.inflate(LayoutInflater.java:534)
	at android.view.LayoutInflater.inflate(LayoutInflater.java:481)
	at X.28I.A0I(Unknown Source:29)
	at androidx.appcompat.app.AppCompatActivity.setContentView(Unknown Source:13)
	at com.OM7753.gold.PinLockActivity.onCreate(Unknown Source:142)
	at android.app.Activity.performCreate(Activity.java:7955)
	at android.app.Activity.performCreate(Activity.java:7944)
	at android.app.Instrumentation.callActivityOnCreate(Instrumentation.java:1307)
	at android.app.ActivityThread.performLaunchActivity(ActivityThread.java:3531)
	at android.app.ActivityThread.handleLaunchActivity(ActivityThread.java:3703)
	at android.app.servertransaction.LaunchActivityItem.execute(LaunchActivityItem.java:83)
	at android.app.servertransaction.TransactionExecutor.executeCallbacks(TransactionExecutor.java:135)
	at android.app.servertransaction.TransactionExecutor.execute(TransactionExecutor.java:95)
	at android.app.ActivityThread$H.handleMessage(ActivityThread.java:2216)
	at android.os.Handler.dispatchMessage(Handler.java:107)
	at android.os.Looper.loop(Looper.java:237)
	at android.app.ActivityThread.main(ActivityThread.java:7948)
	at java.lang.reflect.Method.invoke(Native Method)
	at com.android.internal.os.RuntimeInit$MethodAndArgsCaller.run(RuntimeInit.java:493)
	at com.android.internal.os.ZygoteInit.main(ZygoteInit.java:1075)
android.view.InflateException: B