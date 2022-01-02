#include <bits/stdc++.h>
using namespace std;

int a[50], d, s, j, n, b[10],i ,k;

int main()
{
   freopen("ABCS.INP","r",stdin);
   freopen("ABCS.OUT","w",stdout);

    for(int i = 1; i <= 7; i++) cin >> a[i];
    sort(a+1, a+8);
    n = 6;
    for(i = 1; i <= (n-1); i++){
        for(k = i + 1; k <= n; k++){
            s = a[i]+a[k];
            for(j = i+1; j <= 6; j++) if((a[j]==(a[7]-s))&&(j != k)) {
                    d++;
                break;
            }
            if(d==1) break;
        }
        if(d==1) break;
    }
    if(d==1){
        b[1]=a[i];
        b[2]=a[j];
        b[3]=a[k];
        sort(b+1,b+4);
        for(int i = 1; i <= 3; i++) cout << b[i] << " ";
    }
}
