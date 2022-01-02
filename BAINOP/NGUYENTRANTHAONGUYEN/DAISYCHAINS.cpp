#include <bits/stdc++.h>
using namespace std;

int a[1000], n, s, d;

int main()
{
    freopen("DAISYCHAINS.INP","r",stdin);
    freopen("DAISYCHAINS.OUT","w",stdout);

    cin >> n;
    for(int i = 1; i <= n; i++) cin >> a[i];

    for(int i = 1; i<=n; i++){
        for(int j = 1; j <= (n-i+1); j++)
        {
            s = 0;
            for(int k = j; k <= i+j-1; k++) s = s + a[k];
            for(int k = j; k <= i+j-1; k++) if((float) a[k] == (float) s/i)
            {
                d++;
                break;
            }
        }
    }

    cout << d;
}
