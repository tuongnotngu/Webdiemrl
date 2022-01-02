#include<bits/stdc++.h>

using namespace std;

int main(){
    int n;
    long long dem, tong;
    cin >> n;
    dem = n;
    int a[n];
    for(int i = 0; i<n; i++)
        cin >> a[i];
    long l = 0, r = 1;
    tong = a[l];
    while(l<=n-2)
    {
        if(r != n-1)
        {
            tong = tong + a[r];
            for(int i = l; i<=r; i++)
                if(tong%a[i] == r-l+1)
                {
                    dem = dem + 1;
                    break;
                }
            r = r+1;
        }
        else
        {
            l = l+1;
            r = l+1;
        }
        cout << dem <<" ";

    }
    cout << dem;
}
