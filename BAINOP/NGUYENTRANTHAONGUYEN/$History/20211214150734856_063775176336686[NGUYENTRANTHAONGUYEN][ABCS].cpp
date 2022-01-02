#include <bits/stdc++.h>
using namespace std;

int a[50], d, s, j;

int main()
{
   freopen("ABCS.INP","r",stdin);
   freopen("ABCS.OUT","w",stdout);

    for(int i = 1; i <= 7; i++) cin >> a[i];
    sort(a+1, a+8);

    for(int i = 1; i <= 5; i++){
        s = a[i]+a[i+1];
        for(j = i+2; j <= 6; j++) if(a[j]==(a[7]-s)) {
            d++;
            break;
        }
        if(d==1){
            cout << a[i] << " " << a[i+1] << " "<< a[j];
            break;
        }

    }
}
